--TEST--
Portuguese stemming algorithm (quick)
--SKIPIF--
<?php if (!extension_loaded("stem") || !stem_enabled(STEM_PORTUGUESE)) print "skip"; ?>
--POST--
--GET--
--FILE--
<?php

require("tests.php");

runQuickTest(STEM_PORTUGUESE, "abandonasse", "abandon");
runQuickTest(STEM_PORTUGUESE, "campeonatos", "campeonat");
runQuickTest(STEM_PORTUGUESE, "destitui��o", "destitui��");
runQuickTest(STEM_PORTUGUESE, "infiltra��es", "infiltr");

?>
--EXPECT--
abandonasse -> abandon: OK
campeonatos -> campeonat: OK
destitui��o -> destitui��: OK
infiltra��es -> infiltr: OK
