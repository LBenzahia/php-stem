--TEST--
Russian stemming algorithm (quick)
--SKIPIF--
<?php if (!extension_loaded("stem") || !stem_enabled(STEM_RUSSIAN)) print "skip"; ?>
--POST--
--GET--
--FILE--
<?php

require("tests.php");

runQuickTest(STEM_RUSSIAN, "�������������", "����������");
runQuickTest(STEM_RUSSIAN, "�����������", "�������");
runQuickTest(STEM_RUSSIAN, "��������", "������");
runQuickTest(STEM_RUSSIAN, "���������", "�������");

?>
--EXPECT--
������������� -> ����������: OK
����������� -> �������: OK
�������� -> ������: OK
��������� -> �������: OK
