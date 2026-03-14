<?php

namespace MyProject;

/**
 * Interface AgentInterface
 * Defines the contract for agent classes in the MyProject namespace.
 */


interface AgentInterface {

    /**
     * Describes the agent's characteristics and abilities.
     * @return void
     */

    public function describe(): void;

    /**
     * Executes the agent's attack.
     * @return void
     */
    
    public function attack(): void;

    /**
     * Uses the agent's ability.
     * @return void
     */

    public function useAbility(): void;
}