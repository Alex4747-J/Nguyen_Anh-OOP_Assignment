<?php

namespace MyProject\Traits;

/**
 * Trait HasSmokeTrait
 * Provide the Smoke ability to any agent that uses this trait.
 * Shared between agents in different inheritance hierarchies, allowing them to use the Smoke ability without needing a common parent class. (e.g. Jett and Omen both have Smoke ability)
 */

trait HasSmokeTrait {

    /*
    * @var int - the number of smoke remaining.
    */

    protected int $smokeCount = 3;

    /**
     * Use the Smoke ability, which can be used by agents that have this trait.
     * 
     * @return void
     */
    public function deploySmoke(): void {
        if ($this->smokeCount >0) {
            $this->smokeCount--;
            echo "<p>" . $this->name . "deploys a smoke! Remaining smokes: " . $this->smokeCount;
        } else {
            echo "<p>" . $this->name . " has no smokes remaining!";
        }
    }

    /**
     * Recharge all smokes back to the maximum count.
     * @return void
     */

    public function rechargeSmoke(): void {
        $this->smokeCount = 3;
        echo "<p>" . $this->name . " recharged their smokes!</p>";
    }

}