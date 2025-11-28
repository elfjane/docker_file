<?php
namespace App\Tools;
class DisplayTool
{
    private $template = null;
    private $path = null;
    public $directory = '';
	public function __construct()
	{
	}

    public function show($type, $displayData, $class)
    {
        switch ($type)
        {
            case 'smarty2':
            case 'json':
            {
                $this->cls = $class;
                $this->$type($displayData);
            } break;
        }
    }

    public function json($displayData)
    {
        header('Content-Type: application/json');
        header('X-Status: success');
        echo json_encode($displayData);
    }

    public function smarty2($displayData)
    {
        $this->path = CRON_BASE_PATH.'/tpl/default';
        $this->template = new Smarty();
        $this->template->template_dir = $this->path . '/' . 'templates';
        $this->template->compile_dir =  $this->path . '/' . 'templates_c';
        $this->template->cache_dir = $this->path . '/' . 'cache';
        $this->template->config_dir = $this->path . '/' . 'config';
        $this->template->left_delimiter = "<{";
        $this->template->right_delimiter = "}>";
        $this->template->caching = false;
        $this->template->debugging = false;

        foreach ($displayData as $row => $val)
        {
            $this->template->assign($row, $val);
        }
        $this->template->display("classes/". $this->directory .$this->cls.".tpl.htm");
    }
}
