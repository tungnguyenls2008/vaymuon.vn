<?php

namespace App\Admin\Controllers;

use App\Story;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class StoryController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Story';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Story());

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('avatar', __('Avatar'));
        $grid->column('career', __('Career'));
        $grid->column('role', __('Role'));
        $grid->column('story', __('Story'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Story::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('avatar', __('Avatar'));
        $show->field('career', __('Career'));
        $show->field('role', __('Role'));
        $show->field('story', __('Story'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Story());

        $form->text('name', __('Name'));
        $form->image('avatar', __('Avatar'));
        $form->image('avatar')->move('public/images/avatar/story');
        $form->text('career', __('Career'));
        $form->number('role', __('Role'));
        $form->text('story', __('Story'));

        return $form;
    }
}
