--TEST--
Check for stem presence
--SKIPIF--
<?php if (!extension_loaded("stem")) print "skip"; ?>
--POST--
--GET--
--FILE--
<?php
print "Original porter (default): assassinations -> " . stem("assassinations") . "\n";
print "English: devestating -> " . stem("devestating", STEM_ENGLISH) . "\n";
print "French: majestueusement -> " . stem("majestueusement", STEM_FRENCH) . "\n";
print "Spanish: chicharrones -> " . stem("chicharrones", STEM_SPANISH) . "\n";
print "Dutch: lichamelijkheden -> " . stem("lichamelijkheden", STEM_DUTCH) . "\n";
print "Danish: unders�gelsen -> " . stem("unders�gelsen", STEM_DANISH) . "\n";
print "German: aufeinanderschl�gen -> " . stem("aufeinanderschl�gen", STEM_GERMAN) . "\n";
print "Italian: pronunciamento -> " . stem("pronunciamento", STEM_ITALIAN) . "\n";
print "Norwegian: havnemyndighetene -> " . stem("havnemyndighetene", STEM_NORWEGIAN) . "\n";
print "Portuguese: quilom�tricas -> " . stem("quilom�tricas", STEM_PORTUGUESE) . "\n";
print "Swedish: klosterg�rden -> " . stem("klosterg�rden", STEM_SWEDISH) . "\n\n";

print "Original porter (default): assassinations -> " . stem_porter("assassinations") . "\n";
print "English: devestating -> " . stem_english("devestating") . "\n";
print "French: majestueusement -> " . stem_french("majestueusement") . "\n";
print "Spanish: chicharrones -> " . stem_spanish("chicharrones") . "\n";
print "Dutch: lichamelijkheden -> " . stem_dutch("lichamelijkheden") . "\n";
print "Danish: unders�gelsen -> " . stem_danish("unders�gelsen") . "\n";
print "German: aufeinanderschl�gen -> " . stem_german("aufeinanderschl�gen") . "\n";
print "Italian: pronunciamento -> " . stem_italian("pronunciamento") . "\n";
print "Norwegian: havnemyndighetene -> " . stem_norwegian("havnemyndighetene") . "\n";
print "Portuguese: quilom�tricas -> " . stem_portuguese("quilom�tricas") . "\n";
print "Swedish: klosterg�rden -> " . stem_swedish("klosterg�rden") . "\n";
?>
--EXPECT--
Original porter (default): assassinations -> assassin
English: devestating -> devest
French: majestueusement -> majestu
Spanish: chicharrones -> chicharron
Dutch: lichamelijkheden -> licham
Danish: unders�gelsen -> unders�g
German: aufeinanderschl�gen -> aufeinanderschl�g
Italian: pronunciamento -> pronunc
Norwegian: havnemyndighetene -> havnemyndighet
Portuguese: quilom�tricas -> quilom�tr
Swedish: klosterg�rden -> klosterg�rd

Original porter (default): assassinations -> assassin
English: devestating -> devest
French: majestueusement -> majestu
Spanish: chicharrones -> chicharron
Dutch: lichamelijkheden -> licham
Danish: unders�gelsen -> unders�g
German: aufeinanderschl�gen -> aufeinanderschl�g
Italian: pronunciamento -> pronunc
Norwegian: havnemyndighetene -> havnemyndighet
Portuguese: quilom�tricas -> quilom�tr
Swedish: klosterg�rden -> klosterg�rd
