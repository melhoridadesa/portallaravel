<?php namespace Modules\Site\Http\Controllers;

use Pingpong\Modules\Routing\Controller;
use App\Menu;

class SiteController extends Controller 
{
	protected $dadosMenu;

	public function __construct(Menu $menu)
	{
		$this->dadosMenu = $menu;
	}	

	public function getTextoTituloHome(){
		return [
			"titulo"    => "Bem vindo ao portal do idoso!",
			"textohome" => "Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado. Se popularizou na década de 60, quando a Letraset lançou decalques contendo passagens de Lorem Ipsum, e mais recentemente quando passou a ser integrado a softwares de editoração eletrônica como Aldus PageMaker.",
		];
	}

	public function index()
	{
		return view('site::index', [
			"textohome" => $this->getTextoTituloHome()['textohome'],"titulo" => $this->getTextoTituloHome()['titulo'],
			"menu" => $this->dadosMenu->getMenu()
			]);
	}

	public function quemsomos()
	{
		return view('site::quemsomos', ["textohome" => $this->getTextoTituloHome()['textohome'],"titulo" => $this->getTextoTituloHome()['titulo'],]);
	}
	
}