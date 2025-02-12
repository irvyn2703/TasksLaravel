<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ViewTask extends Component
{
    public $pendingTasks;

    public $inProgressTasks;

    public $completedTasks;

    /**
     * Create a new component instance.
     */
    public function __construct($tasksData)
    {
        $this->pendingTasks = $tasksData['pendingTasks'];
        $this->inProgressTasks = $tasksData['inProgressTasks'];
        $this->completedTasks = $tasksData['completedTasks'];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.view-task');
    }
}
