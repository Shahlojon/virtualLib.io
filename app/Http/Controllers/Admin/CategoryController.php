<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Book;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }
    public function index()
    {
        return view('admin.category.index',[
            'data'=>Category::orderBy('Title', 'asc')->get(),
        ]);
    }

    public function create()
    {        
        return view('admin.category.create');
    }
    public function store(Request $request)
    {
        $validated = $this->validate($request, [
            "Title" => "required"
        ]);
      
        $validated['isActive'] =($request->input('isActive')=='on')?true:false;

       
        Category::create($validated);

        return redirect("/admin/category");
    }

    public function edit($id)
    {
        return view('admin.category.edit', [
            'data'=>Category::findOrFail($id),
        ]);
    }


    public function update(Request $request, $id)
    {
        $data = Category::findOrFail($id);

        
        $validated = $this->validate($request, [
            "Title" => "required",
            'isActive'=>"",
        ]);

        //dd($validated);

        $data->isActive =($validated['isActive']=='true')?true:false;
        

        $data->Title = $validated['Title'];

        $data->update();
        return redirect('/admin/category');
    }

    public function destroy($id)
    {
        //если удалить категорию то относяшийся к этому категориию книги что будеть с ними ? останется нужна подумать значит мне как и они чтобы удалились
        // а как можно? можеш вед найти книги по категорию айди  и их нужно нормально удалить что бы удалилос фото и удалилос 
        // и авторы которые  к этому книге относитьс. Или тех книг куда то нужно перевести тоесть в Не удалямую категорию  
        //и там останется если человек передумать все эти книги удалить то только он перенесеть тоесть по одному изменить категорию  этих книг
        // какое хочеш сделать  удалить  книги  или отправить книги в не удалямую категорию ?
        // не поняла второй вариант
        //при удаления категории книги не удаляеттся просто  их перенесеш в другую категорию  тоесть  как бы на подобие корзины
        // а как это сделать просто при удаления категории получиш все книги под этим категориям и у всех этих книг нужно 
        //поменять категорию айди на 0 и все это уже будеть не удалямоя категория то есть корзина 
        //это уже другая задача ---и еще  при удаления  Учённых нужно также их айди удалить из бук авторс  и Артикл авторс там тоже нужно исправить
        // а как категория под номером 0 будет называться не знаю можно  по любому называть просто  а как ид 0 добавитть тогда 
        // :) не нужно ничего добавить если  добавить то можно и эту категорию вед удалить он в базе вообше нету а просто  он в программном 
        //уровне есть просто логически мы знаем что если категория айди нол то это относится к категорию Все  и так будеть работать далее
        // хорошо подумаю для начала подумай какой варианть хочеш удалить все книги или  отправить их  в пустую категорию ?
        // второй вариант тогда это немного легче просто при отображения и при создания тебе в хтмл немного нужно поменя  
        //тоест добавить там  в селектах то  нулевую категорию  это при создания и изменения книги  нужно так сделать
        //поняла ? да
        $data = Category::findOrFail($id);
        //$book = Book::where('categoryId', $data->id)->get();
        //$bookCategories = Category::find($data->id)->bookCategory;
        if($data){        
            foreach($data->bookCategory as $book){
                // dd($book);
                $book->categoryId = 0;
                $book->update();
                //po moemu tak doljno srabotat почему вмешались 
                //prosto podumal esli ty  tak hochesh otkazatstya  pochemu by ne ukazat v poslediy raz vse dale izmeneniya  
                //sdelay i prover rabotaet li
                //ты тут ? да тут хорошо если не отказался и  можеш потом показать как все работает и так тут много дел 
                //бери и сделай я с дипломной поработаю  там черт знаеть что  я  сам в этим мат моделях  запутался 
                //ок я не буду щас вмешиваться я позже вернусь куда ? ужин приготовить нужна а что готовиш ? шуламошак
                //хорошей готовки  как вернешся напиши если не отказался конечно одумаю потом поговорим до скорого тогда хорошей работы с дипломной
                //спасибо пока пока 
            }

            $data->delete();
        }
        return back();
    }
}
