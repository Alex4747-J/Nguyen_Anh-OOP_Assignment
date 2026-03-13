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

    public function attack(): void;

    public function useAbility(): void;
}