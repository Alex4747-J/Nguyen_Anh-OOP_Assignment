<?php
/**
 * Index file for the Valorant agents.
 *
 * Uses spl_autoload_register to automatically load classes.
 */

spl_autoload_register(function ($class) {
    $class = str_replace('MyProject\\', '', $class);
    $class = str_replace("\\", DIRECTORY_SEPARATOR, $class); # needed for both
    $filepath = __DIR__ . '/includes/classes/' . $class . '.php';
    
    require_once $filepath;
});

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valorant</title>
</head>
<body>
    <h1>Valorant Agent Cheat Sheet</h1>

    <!-- Reyna -->
    <h2>Reyna - The Queen of Frag</h2>
    <?php
    $reyna = new MyProject\Agents\Duelists\Reyna();

    $reyna->describe();
    $reyna->attack();
    $reyna->useAbility();  
    $reyna->reloadSoul();

    ?>
    <h2>Jett - The Joker</h2>
    <?php
    $jett = new MyProject\Agents\Duelists\Jett();

    $jett->describe();
    $jett->attack();
    $jett->useAbility();
    $jett->deploySmoke();
    $jett->rechargeSmoke();
    $jett->reloadDash();

    ?>

    <h2>Omen - The Enigma </h2>
    <?php
    $omen = new MyProject\Agents\Controllers\Omen();
    
    $omen->describe();
    $omen->attack();
    $omen->useAbility();
    $omen->deploySmoke();
    $omen->rechargeSmoke();
    $omen->reloadBlind();

    ?>

    <h2>Killjoy - The Fortress</h2>
    <?php
    $killjoy = new MyProject\Agents\Sentinels\Killjoy();

    $killjoy->describe();
    $killjoy->attack();
    $killjoy->useAbility();
    $killjoy->reloadNanoSwamp();
    ?>  

    <h2>Type-Hinted Function</h2>

    <?php
    /**
     * Simulate a combat scenario between two agents, demonstrating type hinting.
     * @param MyProject\AgentInterface $attacker The attacking agent.
    * @param MyProject\AgentInterface $defender The defending agent.
    * @return void
    */

    function simulateCombat(MyProject\AgentInterface $attacker, MyProject\AgentInterface $defender): void {
        echo "<h3>Combat Simulation:</h3>";
        $attacker->attack();
        $defender->attack();
        $attacker->useAbility();
        $defender->useAbility();
    }   

    echo "<h4>Reyna vs Omen:</h4>";
    simulateCombat($reyna, $omen);
    ?>


</body>
</html>
