<?php
require_once ROOT_PATH."App/Model/HomeModel.php";
class HomeController extends HomeModel{    
    /**
     * home
     *
     * @return void
     * asosiy menu 
     */
    public function home(){
        $TopFilms = $this->TopFilm();
        require_once ROOT_PATH."App/View/User/Home.php";
    }    
    /**
     * watch
     *
     * @return void
     * film haqida to'liq malumot || online ko'rish || yuklab olish
     */
    public function watch(){
        $FilmAbout = $this->FilmAbout($_GET['video_id']);
        $TopFilms = $this->TopFilm();
        require_once ROOT_PATH."App/View/User/watch.php";

    }
    
    /**
     * films
     *
     * @return void
     * barcha filmlar
     */
    public function films(){
        $TopFilms = $this->TopFilm();
        require_once ROOT_PATH."/App/View/User/Films.php";
    }
        
    /**
     * about
     *
     * @return void
     * Sayt haqida malumot || dasturchilar || Sayt foydalanuvchilari soni || Filmlar soni
     */
    public function about(){
        require_once ROOT_PATH."/App/View/User/About.php";
    }    
    /**
     * contacts
     *
     * @return void
     * adminga xabar yuborish
     */
    public function contacts(){
        require_once ROOT_PATH."/App/View/User/Contacts.php";
    }    
    /**
     * shows
     *
     * @return void
     * eng ko'p ko'rilgan Filmlar
     */
    public function shows(){
        require_once ROOT_PATH."/App/View/User/Shows.php";
    }    
    /**
     * help
     *
     * @return void
     * saytdan foydalanish haqida qo'llanma
     */
    public function help(){
        require_once ROOT_PATH."/App/View/User/Help.php";
    }
        
    /**
     * DefaultPage
     *
     * @return void
     * sahisa topilmaganda ishga tushadigan funcsiya
     */
    public function DefaultPage(){
        echo "<script>location.href='".menu(MenuHome)."'</script>";
    }
}