--TEST--
French stemming algorithm (quick)
--SKIPIF--
<?php if (!extension_loaded("stem") || !stem_enabled(STEM_FRENCH)) print "skip"; ?>
--POST--
--GET--
--FILE--
<?php

require("tests.php");

runQuickTest(STEM_FRENCH, "abandonnez", "abandon");
runQuickTest(STEM_FRENCH, "temp�rature", "temp�ratur");
runQuickTest(STEM_FRENCH, "virtuose", "virtuos");
runQuickTest(STEM_FRENCH, "yakounines", "yakounin");

?>
--EXPECT--
abandonnez -> abandon: OK
temp�rature -> temp�ratur: OK
virtuose -> virtuos: OK
yakounines -> yakounin: OK
