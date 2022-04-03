<?php

namespace Joy\VoyagerWidgets\Console\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;

class Widgets extends Command
{
    protected $name = 'joy-widgets';

    protected $description = 'Joy Voyager Widgetser';

    public function handle()
    {
        $this->output->title('Starting widgets');

        // Your magic here

        $this->output->success('Widgets successful');
    }

    /**
     * Get the console command arguments.
     *
     * @return array
     */
    protected function getArguments()
    {
        return [
            ['arguement1', InputArgument::REQUIRED, 'The argument1 description'],
        ];
    }

    /**
     * Get the console command options.
     *
     * @return array
     */
    protected function getOptions()
    {
        return [
            [
                'option1',
                'o',
                InputOption::VALUE_OPTIONAL,
                'The option1 description',
                config('joy-voyager-widgets.option1')
            ],
        ];
    }
}
