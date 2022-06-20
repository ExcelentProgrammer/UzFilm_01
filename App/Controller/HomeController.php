<?php
require_once ROOT_PATH . "App/Model/HomeModel.php";
require_once ROOT_PATH . "App/Model/AccountModel.php";
require_once ROOT_PATH . "App/Model/MultfilmModel.php";
require_once ROOT_PATH . "App/Model/VideoModel.php";

class HomeController extends HomeModel
{
    function __construct()
    {
        $this->MultfilmModel = new MultfilmModel();
        $this->VideoModel = new VideoModel();
    }

    /**
     * home
     *
     * @return void
     * asosiy menu
     */
    public function home()
    {
        $TopFilms = $this->TopFilm();
        $ScaryFilms = $this->ScaryFilm();
        $FunnyFilms = $this->FunnyFilm();
        $FantasticFilms = $this->FantastikFilm();
        $UzbekFilms = $this->GetUzbekFilm();
        $AllFilms = $this->AllFilm();
        $WatchFilms = $this->WatchFilm();
        $Multfilms = $this->MultfilmModel->GetAllMultfilm();
        $Videos = $this->VideoModel->GetAllVideo();


        require_once ROOT_PATH . "App/View/User/Home.php";
    }

    /**
     * watch
     *
     * @return void
     * film haqida to'liq malumot || online ko'rish || yuklab olish
     */
    public function watch()
    {
        $FilmAbout = $this->FilmAbout($_GET['video_id']);
        $TopFilms = $this->TopFilm();
        $Serials = $this->GetSerial($_GET['video_id']);
        $MyList = $this->GetFilmMyListInfo($_GET['video_id']);
        require_once ROOT_PATH . "App/View/User/watch.php";
    }

    /**
     * films
     *
     * @return void
     * barcha filmlar
     */


    /**
     * about
     *
     * @return void
     * Sayt haqida malumot || dasturchilar || Sayt foydalanuvchilari soni || Filmlar soni
     */
    public function about()
    {
        require_once ROOT_PATH . "/App/View/User/About.php";
    }

    public function account()
    {
        $AccountModel = new AccountModel();
        $UserData = $AccountModel->UserData();
        require_once ROOT_PATH . "/App/View/User/Account.php";
    }

    /**
     * contacts
     *
     * @return void
     * adminga xabar yuborish
     */
    public function contacts()
    {
        require_once ROOT_PATH . "/App/View/User/Contacts.php";
    }

    /**
     * shows
     *
     * @return void
     * eng ko'p ko'rilgan Filmlar
     */


    /**
     * help
     *
     * @return void
     * saytdan foydalanish haqida qo'llanma
     */
    public function help()
    {
        require_once ROOT_PATH . "/App/View/User/Help.php";
    }

    /**
     * @author Azamov Samandar
     * Foydalanuvchi saqlab qo'ygan Filmlar || Multfilmlar || Videolar || konsertlarni Olish
     */
    public function MyPlayList()
    {
        $MyLists = $this->GetPlayList();
        require_once ROOT_PATH . "/App/View/User/PlayList.php";
    }


    /**
     * DefaultPage
     *
     * @return void
     * sahisa topilmaganda ishga tushadigan funcsiya
     */
    public function DefaultPage()
    {
        echo "<script>location.href='" . menu(MenuHome) . "'</script>";
    }

    public function FilmInfo()
    {
        $NewFilms = $this->TopFilm();
        $FilmAbout = $this->FilmAbout($_GET['video_id']);
        require_once ROOT_PATH."/App/View/User/Info.php";
    }
}
