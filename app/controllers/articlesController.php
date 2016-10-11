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

				$cats=  Category::lists('name','id');
				$tags= Tag::lists('name','id');
				$article = new News;
				$article->fill($data);
				$article->save();
				
				Return View::make('author.newArticle')->with(['cats2'=>$cats,'tags2'=>$tags]);
			}
			public function authArticle()
			{
				$cat = Input::get('category');
				$tag = Input::get('tag');
				if(Auth::attempt(['category'=>$cat,'tag'=>$tag]))
				{
					//fetch news
					$news = Auth::news();
					$news->save();
					Return Redirect::to('editArticle');
				}
				Return View::make('newArticle')->withMessage('invalid selections');
			}
			public function editArticle()
			{
				$article_roles = Role::get();
				$article_cat = Category::get();
				$article_tag = Tag::get();
				Return View::make('author.editArticle')->with(['roles'=>$article_roles, 'cats'=>$article_cat, 'tags'=>$article_tag]);
			}
			public function articleDashboard()
			{
				$categories = Category::paginate(30);
				$news = News::paginate(20);
				Return View::make('admin.articlePublisherDashboard')->with('categories',$categories)->with('news',$news);
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
				$news = News::paginate(5);
				Return View::make('author.listArticle')->with('categories',$categories)->with('news',$news);
			}
			public function viewArticle()
			{
				$categories = Category::paginate(10);
				$news = News::paginate(1);
				Return View::make('author.viewArticle')->with('categories',$categories)->with('news',$news);
			}


}
