<?php

$testArtikel = "&lt;blockquote&gt;
&lt;h1&gt;&lt;strong&gt;ehem&lt;/strong&gt; &lt;em&gt;ehem link website pribadi  &lt;/em&gt;&lt;/h1&gt;
&lt;/blockquote&gt;
";

$testArtikel = htmlspecialchars($testArtikel);
echo $testArtikel;