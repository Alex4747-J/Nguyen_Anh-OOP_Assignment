<?php

namespace MyProject;

/**
 * class Agent
 * 
 * The root parent class for all Valorant agents in the hierarchy.
 * Define shared properties and methods that all agents have.
 */

class Agent implements AgentInterface {
    /**
     * @var string - the name of the agent.
     */

    protected string $name = "Unnamed Agent";

    /**
     * @var string - the role of the agent
     */

    protected string $role = "Unknown Role";

    /**
     * @var int - the health points of the agent.
     */

    protected int $health = 100;


    /**
     * Create a new agent with the given name, role, and health.
     * @param string $name
     * @param string $role
     * @param int $health
     */

    public function __construct(string $name, string $role, int $health = 100) {
        $this->name = $name;
        $this->role = $role;
        $this->health = $health;
    }

    /**
     * Describe the agent by printing their details.
     *
     * @return void
     */
    
    public function describe(): void
    {
        echo "<p> {$this->name} is a {$this->role} with {$this->health} health points.</p>";
    }

      /**
     *  Fire the agent's weapon.
     *
     * @return void
     */

    public function attack(): void
    {
        echo "<p>{$this->name} fires their gun!</p>";
    }

      /**
     * Use the agent's ability.
     *
     * @return void
     */

    public function useAbility(): void
    {
        echo "<p>{$this->name} uses their ability!</p>";
    }
}
