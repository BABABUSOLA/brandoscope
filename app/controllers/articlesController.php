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
				
				$Activity = new Activity;
				$Activity->authenticated_user_id = Auth::User()->id;
				$Activity->activity_type_id = 3;
				if ($article->save() && $Activity->save())
				{
					Return Redirect::route('authorProfile');
				}
				
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
				$pin_arts = Pin::where('user_id','=',Auth::User()->id)->get();
				$news = News::paginate(15);
				$newSearchs = News::orderBy('id','desc')->take(10)->get();
				$arts = News::orderBy('id','desc')->take(5)->get();
				$categories = Category::paginate(30);
				Return View::make('author.authorProfile')->with('categories',$categories)->with('arts',$arts)->with('news',$news)->with('newSearchs',$newSearchs)->with('user',$user)->with('roles',$article_roles)->with('cats',$article_cat)->with('tags',$article_tag)->with('userArticles',$userArticles)->with('pin_arts',$pin_arts);
			}
			public function authorAccount()
			{	
				$user2 = Auth::User();
				$user = User::get();
				$news = News::paginate(15);
				$newSearchs = News::orderBy('id','desc')->take(5)->get();
				$arts = News::orderBy('id','desc')->take(20)->get();
				$categories = Category::paginate(30);
				Return View::make('author.authorAccount')->with('categories',$categories)->with('arts',$arts)->with('news',$news)->with('newSearchs',$newSearchs)->with('user',$user)->with('user2',$user2);
			}
			public function authorNews()
			{
				// $news = News::find(1);
				
				// dd($news->isPinned(1));

				$article_roles = Role::get();
				$article_cat = Category::get();
				$article_tag = Tag::get();

				$user = Auth::User();

				$userArticles = News::orderBy('id','desc')->take(10)->where('user_id', '=', $user->id)->get();
				$entertainments = Category::orderBy('id','desc')->where('name', '=', 'entertainment')->first();

				$sports = Category::where('name','=','sports')->first();
				$pin_arts = Pin::where('user_id','=',Auth::User()->id)->get();

				$politics= Category::where('name','=','politics')->first();


				$news = News::paginate(15);
				$newSearchs = News::orderBy('id','desc')->paginate(15);
				// echo "<pre>";
				// dd($newSearchs);
				// echo "</pre>";
				
				$arts = News::orderBy('id','desc')->take(5)->get();

				$categories = Category::paginate(10);
				Return View::make('author.authorNews')->with('categories',$categories)->with('arts',$arts)->with('news',$news)->with('newSearchs',$newSearchs)->with('user',$user)->with('roles',$article_roles)->with('cats',$article_cat)->with('tags',$article_tag)->with('userArticles',$userArticles)->with('entertainments',$entertainments)->with('sports',$sports)->with('politics',$politics)->with('pin_arts',$pin_arts);
			}
			public function pinnedNews($id)
			{
				$article_pin = new Pin;
				$article_pin->news_id = $id;
				$article_pin->user_id = Auth::user()->id;
				$article_pin->save();

				
				Return Redirect::back()->withMessage('Pinned new article');

			}
			public function unpinnedNews($id)
			{
				$article_pins = Pin::where('user_id', '=', Auth::user()->id)->where('news_id', '=', $id)->delete();
				// dd($article_pins);
				// $article_pins->delete();
				Return Redirect::back()->withMessage('Article unpinned');

			}
			// public function storeprofileauthor()
			// {
				
			// $data=Input::all();
			
			// $user = Auth::User();
			// $user->fill($data);
			// $user->save();
			
				
			// 	return Redirect::route('authorprofile');
			// }
			public function listArticle()
			{
				$categories = Category::paginate(30);
				$news = News::paginate(20);
				$news = News::orderBy('id','desc')->take(20)->get();
				Return View::make('author.listArticle')->with('categories',$categories)->with('news',$news);
			}
		
			public function viewArticle($id)
			{
				$categories = Category::paginate(30);
				// $news = News::where('category_id', '=', $id)->paginate(10);
				$new = News::find($id);
				$newArts = News::all();

				Return View::make('author.viewArticle')->with('new',$new)->with('categories',$categories)->with('newArts',$newArts);
			}
			public function viewArtCategory($id)
			{
				$categories = Category::paginate(30);
				$newCats = News::where('category_id', '=', $id)->paginate(10);
				$newArts = News::all();
				// $entertainments = Category::where('slug', '=', 'entertainment')->news;				
				Return View::make('author.viewArticleCategory')->with('categories',$categories)->with('newArts',$newArts)->with('newCats',$newCats);
			}
			public function deleteArticle($id)
			{
				$noneed = News::find($id);
				$noneed->delete();
				
				$Activity = new Activity;
				$Activity->authenticated_user_id = Auth::User()->id;
				$Activity->activity_type_id = 6;
				$Activity->save();
				if ($noneed->delete() && $Activity->save())
				{
				Return Redirect::back()->withMessage('article deleted Successfully');
				}
			else
			{
				Return Redirect::back()->withMessage('article  not deleted due to some errors');
			}
			}
			public function getSearch()
			{

				$keyword = Input::get('keyword');
				$tags = Tag::all();
				$news = News::all();
				$categories = Category::paginate(30);
				$cats  = Category::all();
				$newSearchs = News::orderBy('id','desc')->take(10)->get();
				Return View::make('author.search')->with('news',News::where('slug','LIKE','%'.$keyword.'%')->paginate(10))->with('keyword',$keyword)->with('categories',$categories)->with('cats',$cats)->with('tags',$tags)->with('newSearchs',$newSearchs);

			}
			public function postComment()
			{
				$data = Input::all();
				$comment = new Comment();
				$comment->fill($data);


				if($comment->save($data))
					$Activity = new Activity;
				$Activity->authenticated_user_id = Auth::User()->id;
				$Activity->activity_type_id = 8;
				if ($comment->save($data) && $Activity->save())
				{
					return Redirect::back()->with('success','Comment Added Successfully');
				}
				else
				{
					return Redirect::back()->with('fail','Something went wrong, Please try again later');
				}
			}
			
}
