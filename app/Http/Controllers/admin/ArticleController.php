<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class ArticleController extends Controller
{

    public function index()
    {

        $articles = Article::all();

        return view('admin.articles.viewArticles', compact('articles'), [
            'title' => 'Danh sách bài viết'
        ]);
    }

    public function viewAdd()
    {
        $datas = Article::all();
        $categories = Category::all();

        return view('admin.articles.add', compact('datas', 'categories'), [
            'title' => 'Đăng bài viết'
        ]);
    }

    public function store(Request $request)
    {
        // Validate input data
        $validatedData = $request->validate([
            'category' => 'required',
            'title' => 'required|max:255',
            'subtitle' => 'max:255',
            'content' => 'required',
            'image' => 'nullable|image|max:2048',
        ]);

        // Create a new post
        $article = new Article();
        $article->id_user = auth()->user()->id_user;
        $article->id_category = $validatedData['category'];
        $article->id_status = 2;
        $article->title_article = $validatedData['title'];
        $article->subtitle_article = $validatedData['subtitle'];
        $article->content_article = $validatedData['content'];
        $article->date_article = now();

        // Handle image upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/images', $imageName);
            $article->image_article = $imageName;
        }

        // Save the post
        $article->save();

        // Redirect or return a response
        return redirect()->back()->with('success', 'Đăng bài viết thành công!');
    }

    public function review()
    {
        $articles = Article::all();

        return view('admin.articles.reviewArticle', compact('articles'), [
            'title' => 'Danh sách bài viết'
        ]);
    }

    public function viewDetail($id)
    {
        $article = Article::findOrFail($id);

        return view('admin.articles.viewDetail', compact('article'), [
            'title' => 'Thông tin bài viết'
        ]);
    }

    public function approve($id)
    {
        $article = Article::findOrFail($id);
        $article->id_status = 1;
        $article->save();

        return redirect()->back()->with('success', 'Duyệt bài viết thành công!');
    }

    public function rejecte($id)
    {
        $article = Article::findOrFail($id);
        $article->id_status = 3;
        $article->save();

        return redirect()->back()->with('success', 'Từ chối bài viết thành công!');
    }

    public function bulkAction(Request $request)
    {
        $action = $request->input('action');
        $articleIds = $request->input('selected_articles');

        if ($action && $articleIds) {
            switch ($action) {
                case 'approve':
                    Article::whereIn('id_article', $articleIds)->update(['id_status' => 1]);
                    break;
                case 'reject':
                    Article::whereIn('id_article', $articleIds)->update(['id_status' => 3]);
                    break;
            }
        }

        return redirect()->back()->with('success', 'Duyệt nhiều thành công!');
    }

    public function managementArticle()
    {
        $articles = Article::all();

        return view('admin.articles.ArticleManagement', compact('articles'), [
            'title' => 'Quản lý bài viết'
        ]);
    }

    public function edit($id)
    {
        $articles = Article::findOrFail($id);
        $categories = Category::all();

        return view('admin.articles.edit', compact('articles', 'categories'), [
            'title' => 'Chỉnh sửa bài viết'
        ]);
    }

    public function update(Request $request, $id)
    {
        $article = Article::findOrFail($id);

        $article->title_article = $request->input('title');
        $article->subtitle_article = $request->input('subtitle');
        $article->content_article = $request->input('content');
        $article->id_category = $request->input('category');

        $article->save();

        return redirect()->route('article.management')->with('success', 'Chỉnh sửa bài viết thành công!');
    }

    public function destroy($id)
    {
        $article = Article::findOrFail($id);

        // Xóa ảnh từ thư mục
        $imagePath = public_path('storage/images/' . $article->image_article);
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }

        $article->delete();

        return redirect()->back()->with('success', 'Xóa bài viết thành công!');
    }

    public function search(Request $request)
    {
        $searchTerm = $request->input('table_search');

        // Assuming you have a scopeSearch method in your Article model to handle the search logic
        $articles = Article::with(['users', 'category', 'status'])
            ->where(function ($query) use ($searchTerm) {
                $query->where('title_article', 'LIKE', "%{$searchTerm}%")
                    ->orWhereHas('users', function ($name) use ($searchTerm) {
                        $name->where('name_user', 'LIKE', "%{$searchTerm}%");
                    })
                    ->orWhereHas('category', function ($dm) use ($searchTerm) {
                        $dm->where('name_category', 'LIKE', "%{$searchTerm}%");
                    });
            })
            ->get();

        return view('admin.articles.viewArticles', compact('articles'), [
            'title' => 'Tìm kiếm bài viết'
        ]);
    }
}
