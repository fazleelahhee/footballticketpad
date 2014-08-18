<?php

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;

class pageMetaTest extends Command {

	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $name = 'pageMeta:test';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'test Page meta';

	/**
	 * Create a new command instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * Execute the console command.
	 *
	 * @return mixed
	 */
	public function fire()
	{
        $pagesMeta = new PagesMeta();

        $data = $pagesMeta->setMetaKey(array('page_id'=>1, 'meta_keyword'=>'test', 'meta_content'=>'Test case 4'));

        //echo $data->meta_content;
	}

	/**
	 * Get the console command arguments.
	 *
	 * @return array
	 */
	protected function getArguments()
	{
		return array(
			array('example', InputArgument::OPTIONAL, 'An example argument.'),
		);
	}

	/**
	 * Get the console command options.
	 *
	 * @return array
	 */
	protected function getOptions()
	{
		return array(
			array('example', null, InputOption::VALUE_OPTIONAL, 'An example option.', null),
		);
	}

}
