--TEST--
Finnish stemming algorithm (quick)
--SKIPIF--
<?php if (!extension_loaded("stem") || !stem_enabled(STEM_FINNISH)) print "skip"; ?>
--POST--
--GET--
--FILE--
<?php

require("tests.php");

runQuickTest(STEM_FINNISH, "aakkosj�rjestyksess�", "aakkosj�rjestyks");
runQuickTest(STEM_FINNISH, "englanninkielisell�", "englanninkielis");
runQuickTest(STEM_FINNISH, "goldbergerille", "goldberger");
runQuickTest(STEM_FINNISH, "irakilaisille", "irakilais");

?>
--EXPECT--
aakkosj�rjestyksess� -> aakkosj�rjestyks: OK
englanninkielisell� -> englanninkielis: OK
goldbergerille -> goldberger: OK
irakilaisille -> irakilais: OK

