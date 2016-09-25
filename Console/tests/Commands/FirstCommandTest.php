<?php
// tests/AppBundle/Command/CreateUserCommandTest.php
namespace Console\Tests\Command;

use Console\Commands\FirstCommand;

use Symfony\Component\Console\Application;
use Symfony\Component\Console\Tester\CommandTester;

class FirstCommandTest  extends \PHPUnit_Framework_TestCase
{
    public function testExecute()
    {
        $application = new Application();
        $application->add(new FirstCommand());
 
        $command = $application->find('phpmaster:fibonacci');
        $tester = new CommandTester($command);
         $tester->execute(array('command' => $command->getName()));
 
    
        
       
        // ...
    }
}