<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Auth;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // frontend то что здесь передается будеть доступен во всех  вью файлах
       /* View::composer('*', function ($view) {
            // user info
            $userInfo = [];
            if(Auth::check()) {
    //здесь проверяем вошел ли ползовател если вошел  то этого вставляем в переменной userInfo и отправляем  на всех вью понятно ?
    // да но метод называется бут почему это стороний метод  это не контроллер   просто бут который запускает нужные веши перед
    //иил с контроллером  щас контроллер будем делать я щас подумал это даже нам не нужно  то что в буд отправляем но пусть  такой приём 
    //тоже научис например показ категории или  что то еще тебе так будеть понадобится по этому щас так оставим хорошо или  лучше делать 
    //проверку на авторизованнос в самом хтмл  там тоже можно  ? мы авторизуемся или как ? как сказать мы проверяем  то кто открыл
    //страницу  вошел ли в систему авторизация вед нужна мы его делали  зачем еще раз делать  то что сгенирировали уже есть и автори
    /// нужна ведь пускать в админку только админа это работа миддлеваре  мы его прошлый раз делали если помниш я не очень поняла 
    //тоест  человек авторизуется в систему как бы войдеть  и хочет попасть в админку  в адресе забываеть /admin и тут наш миддлевар ведь
    // адрес сейчас другой как другой  тот? да тот  тут наш миддлевару подключен в контроллер
                $userInfo = Auth::user();
            }
            $view->with([
                'userInfo' => $userInfo,
             
            ]);

        });*/
    }
}
