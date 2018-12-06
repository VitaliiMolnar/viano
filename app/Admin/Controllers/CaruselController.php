<?php

namespace App\Admin\Controllers;

use App\Models\Carusel;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;

class CaruselController extends Controller
{
    use HasResourceActions;

    /**
     * Index interface.
     *
     * @param Content $content
     * @return Content
     */
    public function index(Content $content)
    {
        return $content
            ->header('Index')
            ->description('description')
            ->body($this->grid());
    }

    /**
     * Show interface.
     *
     * @param mixed $id
     * @param Content $content
     * @return Content
     */
    public function show($id, Content $content)
    {
        return $content
            ->header('Detail')
            ->description('description')
            ->body($this->detail($id));
    }

    /**
     * Edit interface.
     *
     * @param mixed $id
     * @param Content $content
     * @return Content
     */
    public function edit($id, Content $content)
    {
        return $content
            ->header('Edit')
            ->description('description')
            ->body($this->form()->edit($id));
    }

    /**
     * Create interface.
     *
     * @param Content $content
     * @return Content
     */
    public function create(Content $content)
    {
        return $content
            ->header('Create')
            ->description('description')
            ->body($this->form());
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Carusel);

        //$grid->id('Id');
        $grid->gallery_id('ID главной картинки');
        $grid->image('Картинка')->image();
        /*$grid->created_at('Created at');
        $grid->updated_at('Updated at');*/

        $grid->filter(function (Grid\Filter $filter) {
            $filter->equal('gallery_id', 'ID главной картинки');
        });

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
        $show = new Show(Carusel::findOrFail($id));

        //$show->id('Id');
        $show->gallery_id('ID главной картинки');
        $show->image('Картинка');
        /*$show->created_at('Created at');
        $show->updated_at('Updated at');*/

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Carusel);

        $form->number('gallery_id', 'ID главной картинки');
        $form->image('image', 'Картинка');

        return $form;
    }
}
