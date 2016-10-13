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
				$cats=  Category::lists('name','id');
				$tags= Tag::lists('name','id');
				Return View::make('author.newArticle')->with(['roles'=>$article_roles, 'cats2'=>$cats,'cats'=>$article_cat, 'tags'=>$article_tag, 'tags2'=>$tags]);
			}
			public function storeArticle()
			{
				$data = Input::all();

				
				$article = new News;
				$article->fill($data);
				$article->save();
				
				Return Redirect::route('listArticle');
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
				Return View::make('author.authorProfile')->with(['roles'=>$article_roles, 'cats'=>$article_cat, 'tags'=>$article_tag]);
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
				$new = News::find($id);
				Return View::make('author.viewArticle')->with('new',$new)->with('categories',$categories);
			}
			public function getSearch()
			{

				$keyword = Input::get('keyword');
				$tags = Tag::all();
				$news = News::all();
				$categories = Category::paginate(20);
				$cats  = Category::all();
				$newSearchs = News::orderBy('id','desc')->take(10)->get();
				Return View::make('author.search')->with('news',News::where('slug','LIKE','%'.$keyword.'%')->get())->with('keyword',$keyword)->with('categories',$categories)->with('cats',$cats)->with('tags',$tags)->with('newSearchs',$newSearchs);

			}


}
