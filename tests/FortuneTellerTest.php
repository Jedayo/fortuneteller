<?php
use PHPUnit\Framework\TestCase;

require __DIR__ . "/../src/FortuneTeller.php";

class FortuneTellerTest extends TestCase {


   public function testRelationshipPrediction_WithDefaultEntries_ReturnsNotNull() {
    $fortuneTeller = new FortuneTeller();
    $prediction = $fortuneTeller->getRelationshipPrediction();
    $this->assertNotNull($prediction);
   }

   public function testMoneyArray_WithDefaultEntires_ReturnsCountOf3() {
    $fortuneTeller = new FortuneTeller();
    $this->assertCount(3, $fortuneTeller->money_array);
   }
}
