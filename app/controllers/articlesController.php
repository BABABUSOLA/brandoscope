<?php

class articlesController extends BaseController {

	/**
	 * Create the article views.
	 *
	 * @return void
	 */
		public function newArticle()
			{

				$article_roles = Role::get();
				$article_cat = Category::get();
				$article_tag = Tag::get();
				$users= Auth::User();

				$cats=  Category::lists('name','id');
				$tags= Tag::lists('name','id');
				Return View::make('author.newArticle')->with(['roles'=>$article_roles, 'cats2'=>$cats,'cats'=>$article_cat, 'tags'=>$article_tag, 'tags2'=>$tags, 'user2'=>$users]);
			}
			public function storeArticle()
			{
				$data = Input::all();

				
				$article = new News;
				$article->fill($data);
				$article->save();
				
				Return Redirect::route('authorProfile');
			}
			
			public function editArticle()
			{
				$article_roles = Role::get();
				$article_cat = Category::get();
				$article_tag = Tag::get();
				$cats=  Category::lists('name','id');
				$tags= Tag::lists('name','id');
				Return View::make('author.editArticle')->with(['roles'=>$article_roles, 'cats2'=>$cats,'cats'=>$article_cat, 'tags'=>$article_tag, 'tags2'=>$tags]);
			}
			public function articleDashboard()
			{
				$categories = Category::paginate(30);
				$news = News::paginate(20);
				$arts = News::orderBy('id','desc')->take(20)->get();
				$newSearchs = News::orderBy('id','desc')->take(10)->get();
				Return View::make('admin.articlePublisherDashboard')->with('categories',$categories)->with('news',$news)->with('arts',$arts)->with('newSearchs',$newSearchs);
			}
			public function authorProfile()

			{
			
				$article_roles = Role::get();
				$article_cat = Category::get();
				$article_tag = Tag::get();

				$user = Auth::User();
				$userArticles = News::orderBy('id','desc')->take(10)->where('user_id', '=', $user->id)->get();
			
				$news = News::paginate(15);
				$newSearchs = News::orderBy('id','desc')->take(10)->get();
				$arts = News::orderBy('id','desc')->take(5)->get();
				$categories = Category::paginate(20);
				Return View::make('author.authorProfile')->with('categories',$categories)->with('arts',$arts)->with('news',$news)->with('newSearchs',$newSearchs)->with('user',$user)->with('roles',$article_roles)->with('cats',$article_cat)->with('tags',$article_tag)->with('userArticles',$userArticles);
			}
			public function authorAccount()
			{	
				$user = User::get();
				$news = News::paginate(15);
				$newSearchs = News::orderBy('id','desc')->take(5)->get();
				$arts = News::orderBy('id','desc')->take(20)->get();
				$categories = Category::paginate(20);
				Return View::make('author.authorAccount')->with('categories',$categories)->with('arts',$arts)->with('news',$news)->with('newSearchs',$newSearchs)->with('user',$user);
			}
				
		
			public function listArticle()
			{
				$categories = Category::paginate(30);
				$news = News::paginate(20);
				$news = News::orderBy('id','desc')->take(20)->get();
				Return View::make('author.listArticle')->with('categories',$categories)->with('news',$news);
			}
			public function viewArticle($id)
			{
				$categories = Category::paginate(10);
				$news = News::where('category_id', '=', $id)->paginate(10);
				$newArts = News::all();
				Return View::make('author.viewArticle')->with('news',$news)->with('categories',$categories)->with('newArts',$newArts);
			}
			public function viewArtCategory($id)
			{
				$categories = Category::paginate(10);
				$news = News::where('category_id', '=', $id)->paginate(10);
				$newArts = News::all();
				// $entertainments = Category::where('slug', '=', 'entertainment')->news;				
				Return View::make('author.viewArticle')->with('categories',$categories)->with('newArts',$newArts)->with('news',$news);
			}
			public function deleteArticle($id)
			{
				$noneed = News::find($id);
				$noneed->delete();
				Return Redirect::back()->with('noneed',$noneed);
			}
			public function getSearch()
			{

				$keyword = Input::get('keyword');
				$tags = Tag::all();
				$news = News::all();
				$categories = Category::paginate(20);
				$cats  = Category::all();
				$newSearchs = News::orderBy('id','desc')->take(10)->get();
				Return View::make('author.search')->with('news',News::where('slug','LIKE','%'.$keyword.'%')->paginate(10))->with('keyword',$keyword)->with('categories',$categories)->with('cats',$cats)->with('tags',$tags)->with('newSearchs',$newSearchs);

			}


}
