<?php

use App\Models\Films;
use App\Models\Video;
use App\Models\Multfilm;
use App\Models\Token;
use App\Models\UsersModel as Users;

require_once ROOT_PATH . "App/Model/HomeModel.php";
require_once ROOT_PATH . "App/Model/AccountModel.php";
require_once ROOT_PATH . "App/Model/MultfilmModel.php";
require_once ROOT_PATH . "App/Model/VideoModel.php";
require_once ROOT_PATH . "App/Model/AdminModel.php";
require_once ROOT_PATH."/App/Model/Films.php";
require_once ROOT_PATH."/App/Model/Video.php";
require_once ROOT_PATH."/App/Model/Multfilm.php";
require_once ROOT_PATH."/App/Model/Users.php";
require_once ROOT_PATH."/App/Model/Token.php";


class HomeController extends HomeModel
{
	function __construct()
	{
		$this->MultfilmModel = new MultfilmModel();
		$this->VideoModel = new VideoModel();
		$this->AdminModel = new AdminModel();
	}

	/**
	 * home
	 *
	 * @return void
	 * asosiy menu
	 */
	public function home()
	{
		$TopFilms = Films::where("FilmRating","=","3");
		$ScaryFilms = Films::where("FilmJanr","=","Qo'rqinchli");
		$FunnyFilms = Films::where("FilmJanr","=","Kamedia");
		$FantasticFilms = Films::where("FilmJanr","=","Fantastik");

		$UzFilms = Films::where("FilmLanguage","=","O'zbek Tilida");
		$RuFilms = Films::where("FilmLanguage","=","Rus Tilida");
		$EnFilms = Films::where("FilmLanguage","=","Ingliz Tilida");
		$UzMultfilms = Multfilm::where("FilmLanguage","=","O'zbek Tilida");
		$RuMultfilms = Multfilm::where("FilmLanguage",'=',"Rus Tilida");
		$EnMultfilms = Multfilm::where("FilmLanguage",'=',"Ingliz Tilida");
		$UzVideos = Video::where("FilmLanguage","=","O'zbek Tilida");
		$RuVideos = Video::where("FilmLanguage",'=',"Rus Tilida");
		$EnVideos = Video::where("FilmLanguage",'=',"Ingliz Tilida");

		$AllFilms = Films::all();
		$WatchFilms = $this->WatchFilm();
		$Multfilms = Multfilm::all();
		$Videos = Video::all();


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
		$FilmAbout = Films::where("ID","=",$_GET['id']);
		$TopFilms = Films::where("FilmRating","=","3");
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
		$NumberOfUsers = $this->AdminModel->NumberOfUsers();
        $NumberOfFilms = $this->AdminModel->NumberOfFilms();
        $NumberOfMultfilms = $this->AdminModel->NumberOfMultfilms();
        $NumberOfVideos = $this->AdminModel->NumberOfVideos();
        $NumberOfSerial = $this->AdminModel->NumberOfSerial();
		$guests = $this->AdminModel->guests();
		$Shows = $this->Shows();
		require_once ROOT_PATH . "/App/View/User/About.php";
	}

	public function account()
	{
		$Seanslar =	Token::where("UserID","=",User::ID());
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
	/**
	 * All
	 *
	 * @return void
	 * 
	 * Barcha filmlarni ko'rish sahifasi
	 */
	public function All()
	{
		$PageFilms = 18;
		$type = $_GET['type'];
		$PP = ($_GET['p']-1)*$PageFilms;
		if ($type == "Film"){
			$a = $this->AllFilm();
			$AllFilms = array_slice($a,$PP,$PageFilms);
		}elseif ($type == "Multfilm"){
			$a = $this->MultfilmModel->GetAllMultfilm();
			$AllFilms = array_slice($a,$PP,$PageFilms);
		}elseif ($type == "Video"){
			$a = $this->VideoModel->GetAllVideo();
			$AllFilms = array_slice($a,$PP,$PageFilms);
		}
		$pages = ceil(count($a) / $PageFilms);
		$apages = $pages;
		$page = $_GET['p'];
		if ($page + 2 <= $pages) {
			$pages = $page + 2;
		} elseif ($page + 1 <= $pages) {
			$pages = $page + 1;
		} else {
			$page = $pages;
		}
		if ($page <= 3) {
			$start = 1 ;
			if ($pages == 3) {
				$pages += 2;
			} elseif ($pages == 4) {
				$pages += 1;
			}
		} elseif ($page > 3) {
			$start = $page - 2;
		}
		$type = strtolower($type);
		require_once ROOT_PATH . "/App/View/User/All.php";
	}

	function RemovePlayList(){
		$FilmID = $_GET['video_id'];
		$UserID = $_SESSION['ID'];
		$Type = $_GET['type'];
		$this->RemovePlayListFilm($UserID,$FilmID,$Type);
		__location(menu(MenuPlayList));
	}
}
