--TEST--
German stemming algorithm (quick)
--SKIPIF--
<?php if (!extension_loaded("stem") || !stem_enabled(STEM_GERMAN)) print "skip"; ?>
--POST--
--GET--
--FILE--
<?php

require("tests.php");

runQuickTest(STEM_GERMAN, "abenteuerspielpl�tzen", "abenteuerspielplatz");
runQuickTest(STEM_GERMAN, "eingefleischten", "eingefleischt");
runQuickTest(STEM_GERMAN, "k�mmerlichen", "kumm");
runQuickTest(STEM_GERMAN, "weltverantwortung", "weltverantwort");

?>
--EXPECT--
abenteuerspielplatzen -> abenteuerspielplatz: OK
eingefleischten -> eingefleischt: OK
kummerlichen -> kumm: OK
weltverantwortung -> weltverantwort: OK

