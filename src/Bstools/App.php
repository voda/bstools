<?php
namespace Bstools;
use \Symfony\Component\Console\Application;
use Symfony\Component\Console\Command\Command,
    Symfony\Component\Console\Input\InputArgument,
    Symfony\Component\Console\Input\InputOption,
    Symfony\Component\Console\Input\InputInterface,
    Symfony\Component\Console\Output\OutputInterface;
class App extends Application
{
    public function __construct()
    {
        parent::__construct('bsTools', '0.6.0');
        $this->add(new \Bstools\Command\Stats());
        $this->add(new \Bstools\Command\Kick());
        $this->add(new \Bstools\Command\Tubes());
        $this->add(new \Bstools\Command\Delete());
        $this->add(new \Bstools\Command\Insert());
        $this->add(new \Bstools\Command\Drain());
        $this->add(new \Bstools\Command\Peek());
        $this->add(new \Bstools\Command\Bury());
        $this->add(new \Bstools\Command\StatsJob());
    }
}