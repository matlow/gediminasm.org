<?php

use Behat\Behat\Context\BehatContext,
    Behat\MinkExtension\Context\MinkContext;
use Behat\Gherkin\Node\PyStringNode,
    Behat\Gherkin\Node\TableNode;
use Behat\Behat\Context\Step\Then,
    Behat\Behat\Context\Step\When,
    Behat\Behat\Context\Step\Given;

require_once 'PHPUnit/Autoload.php';
require_once 'PHPUnit/Framework/Assert/Functions.php';

class FeatureContext extends MinkContext {

    private $conf;

    function __construct(array $parameters) {
        $this->conf = $parameters;

        require_once $this->conf['root_dir'] . '/functor.php';

        //prepare other feature contexts
        $this->useContext('services', new ServiceContext);
    }

}