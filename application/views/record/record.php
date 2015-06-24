<!--
> Muaz Khan     - https://github.com/muaz-khan
> MIT License   - https://www.webrtc-experiment.com/licence/
> Documentation - https://github.com/streamproc/MediaStreamRecorder
> =================================================================
> audio-recorder.html
-->
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>WebRTC Audio Recording using MediaStreamRecorder</title>
        
        <!--
        <script 
            src="../MediaStreamRecorder-v1.2.js"
            data-scripts-dir="/MediaStreamRecorder/"
            data-require="StereoRecorder,MediaRecorder,WhammyRecorder,GifRecorder,MultiStreamRecorder"
        ></script>
        -->
        
        <!--
        <script src="../MediaStreamRecorder-standalone.js"></script>
        -->
        
        <script src="https://www.webrtc-experiment.com/MediaStreamRecorder/AudioStreamRecorder/FlashAudioRecorder.js"></script>
        
        <style>
            input {
                border: 1px solid rgb(46, 189, 235);
                border-radius: 3px;
                font-size: 1em;
                outline: none;
                padding: .2em .4em;
                width: 60px;
                text-align: center;
            }
        </style>
    </head>
    <body>
        <h1>
            <a href="https://www.webrtc-experiment.com/">WebRTC</a> Audio Recording using <a href="https://github.com/streamproc/MediaStreamRecorder"
                                     target="_blank">MediaStreamRecorder</a>
        </h1>
		
        <div>
            <label for="time-interval">Time Interval (milliseconds):</label>
            <input type="text" id="time-interval" value="5000">ms
            
            <input id="left-channel" type="checkbox" checked>
            <label for="left-channel">Only Left Channel?</label>

            <button id="start-recording">Start Recording</button>
            <button id="stop-recording" disabled>Stop Recording</button>
            <button><a href="<?php base_url();?>sound">HOME</a></button>
        </div>
        
        <div id="audios-container">
        </div>
        <script>
            var mediaConstraints = { audio: true };
            
            document.querySelector('#start-recording').onclick = function() {
                this.disabled = true;
                navigator.getUserMedia(mediaConstraints, onMediaSuccess, onMediaError);
            };
            
            document.querySelector('#stop-recording').onclick = function() {
                this.disabled = true;
                mediaRecorder.stop();
            };
            
            var mediaRecorder;

            function onMediaSuccess(stream) {
                var audio = document.createElement('audio');
                
                audio = mergeProps(audio, {
                    controls: true,
                    src: URL.createObjectURL(stream)
                });
                audio.play();

                audiosContainer.appendChild(audio);
                audiosContainer.appendChild(document.createElement('hr'));

                mediaRecorder = new MediaStreamRecorder(stream);
                mediaRecorder.mimeType = 'audio/ogg';
                mediaRecorder.audioChannels = !!document.getElementById('left-channel').checked ? 1 : 2;
                mediaRecorder.ondataavailable = function(blob) {
                    var a = document.createElement('a');
                    a.target = '_blank';
                    a.innerHTML = 'Open Recorded Audio No. ' + (index++) + ' (Size: ' + bytesToSize(blob.size) + ') Time Length: ' + getTimeLength(timeInterval);

                    a.href = URL.createObjectURL(blob);

                    audiosContainer.appendChild(a);
                    audiosContainer.appendChild(document.createElement('hr'));
                };
                
                var timeInterval = document.querySelector('#time-interval').value;
                if(timeInterval) timeInterval = parseInt(timeInterval);
                else timeInterval = 5 * 1000;

                // get blob after specific time interval
                mediaRecorder.start(timeInterval);
                
                document.querySelector('#stop-recording').disabled = false;
            }

            function onMediaError(e) {
                console.error('media error', e);
            }

            var audiosContainer = document.getElementById('audios-container');
            var index = 1;
            
            // below function via: http://goo.gl/B3ae8c
            function bytesToSize(bytes) {
               var k = 1000;
               var sizes = ['Bytes', 'KB', 'MB', 'GB', 'TB'];
               if (bytes === 0) return '0 Bytes';
               var i = parseInt(Math.floor(Math.log(bytes) / Math.log(k)),10);
               return (bytes / Math.pow(k, i)).toPrecision(3) + ' ' + sizes[i];
            }
            
            // below function via: http://goo.gl/6QNDcI
            function getTimeLength(milliseconds) {
                var data = new Date(milliseconds);
                return data.getUTCHours()+" hours, "+data.getUTCMinutes()+" minutes and "+data.getUTCSeconds()+" second(s)";
            }
            
            window.onbeforeunload = function() {
                document.querySelector('#start-recording').disabled = false;
            };
        </script>
        
        <pre style="border-left: 2px solid red; margin-left:2em; padding-left: 1em;">
// cdn.webrtc-experiment.com/MediaStreamRecorder.js
var mediaConstraints = {
    audio: true
};

navigator.getUserMedia(mediaConstraints, onMediaSuccess, onMediaError);

function onMediaSuccess(stream) {
    var mediaRecorder = new MediaStreamRecorder(stream);
    mediaRecorder.mimeType = 'audio/ogg';
    mediaRecorder.ondataavailable = function (blob) {
        // POST/PUT "Blob" using FormData/XHR2
        var blobURL = URL.createObjectURL(blob);
        document.write('&lt;a href="' + blobURL + '"&gt;' + blobURL + '&lt;/a&gt;');
    };
    mediaRecorder.start(3000);
}

function onMediaError(e) {
    console.error('media error', e);
}
</pre>
        
        <a href="https://www.webrtc-experiment.com/" style="border-bottom: 1px solid red; color: red; font-size: 1.2em; position: absolute; right: 0; text-decoration: none; top: 0;">← WebRTC Experiments</a>
    </body>
</html>
