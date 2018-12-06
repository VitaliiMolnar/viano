<?php

namespace App\Admin\Controllers;

use App\Models\Gallery;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;

class GalleryController extends Controller
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
        $grid = new Grid(new Gallery);

        $grid->id('Id');
        $grid->title('Название картинки');
        //$grid->description('Описание');
        $grid->slug('URL');
        $grid->image('Картинка')->image();
        //$grid->description_carusel('Описание папки');

        $grid->column('carusel_image', 'Картинки в папке')->display(function () {
            return '<a class="btn btn-info" href="/admin/carusel?gallery_id='.$this->id.'">Картинки</a>';
        });

        /*$grid->created_at('Created at');
        $grid->updated_at('Updated at');*/

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
        $show = new Show(Gallery::findOrFail($id));

        $show->id('Id');
        $show->title('Название картинки');
        //$show->description('Описание');
        $show->slug('URL');
        $show->image('Картинка');
        //$show->description_carusel('Описание папки');
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
        $form = new Form(new Gallery);

        $form->text('title', 'Название картинки');
        //$form->text('description', 'Описание');
        $form->text('slug', 'URL');
        $form->image('image', 'Картинка')->fit(1000, 1000);
        //$form->text('description_carusel', 'Описание папки');

        return $form;
    }
}
