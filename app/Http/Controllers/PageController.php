<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use App\Models\CategoryGroup;
use App\Models\Users;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function home()
    {
        $categoryGroups = CategoryGroup::all();
        $category = Category::all();
        $articles = Article::all();

        return view('client.index', compact('categoryGroups', 'category', 'articles'), [
            'title' => 'Liên minh hợp tác xã Việt Nam'
        ]);
    }

    public function showListArticlebyCategory($id)
    {
        $category = Category::findOrFail($id);

        $article = Article::all();

        $articles = Article::where('id_category', $id)->get();

        return view('client.layout.articles', compact('category', 'article', 'articles'), [
            'title' => $category->name_category
        ]);
    }

    public function showDetailArticle($idArticle)
    {
        $category = Category::all();
        $article = Article::findOrFail($idArticle);

        return view('client.layout.show', compact('article', 'category'), [
            'title' => $article->title_article
        ]);
    }

    public function search(Request $request)
    {
        $query = $request->input('query');

        // Thực hiện tìm kiếm
        $articles = Article::where('title_article', 'LIKE', "%{$query}%")
            ->orWhere('content_article', 'LIKE', "%{$query}%")
            ->get();

        // Trả về kết quả tìm kiếm cho view
        return view('client.layout.search', compact('articles', 'query'), [
            'title' => 'Tìm kiếm bài viết'
        ]);
    }

    public function DevelopmentHistory()
    {
        return $this->viewWithData('client.products.lich-su-phat-trien', 'Lịch sử phát triển');
    }

    public function Responsibilities()
    {
        return $this->viewWithData('client.products.chuc-nang-nhiem-vu', 'Chức năng nhiệm vụ');
    }

    public function LeaderVCA()
    {
        return $this->viewWithData('client.products.lanh-dao-vca', 'Lãnh đạo VCA');
    }

    public function OrgStructure()
    {
        return $this->viewWithData('client.products.co-cau-to-chuc', 'Cơ cấu tổ chức');
    }

    public function CooperativeAllianceNetwork()
    {
        return $this->viewWithData('client.products.mang-luoi', 'Mạng lưới Liên minh HTX Tỉnh/TP');
    }

    public function AnnualReport()
    {
        return $this->viewWithData('client.products.bao-cao-thuong-nien', 'Báo cáo thường niên');
    }

    public function news_vca()
    {
        return $this->viewWithData('client.products.tin-vca', 'Tin VCA');
    }

    public function Cooperative()
    {
        return $this->viewWithData('client.products.hop-tac-xa', 'Hợp tác xã');
    }

    public function CityCooperativeAlliance()
    {
        return $this->viewWithData('client.products.lienminh-htx-tinh-tp', 'Liên minh HTX Tỉnh/TP');
    }

    public function Economic()
    {
        return $this->viewWithData('client.products.kinh-te', 'Kinh tế');
    }

    public function social_cultural()
    {
        return $this->viewWithData('client.products.van-hoa-xh', 'Văn hóa - Xã hội');
    }

    public function local_news()
    {
        return $this->viewWithData('client.products.tin-dia-phuong', 'Tin địa phương');
    }

    public function innovative_startup()
    {
        return $this->viewWithData('client.products.khoi-nghiep-sang-tao', 'Khởi nghiệp sáng tạo');
    }

    public function represent_and_protect_members()
    {
        return $this->viewWithData('client.products.dai-dien-bao-ve-thanh-vien', 'Đại Diện và Bảo Vệ Thành Viên');
    }

    // Phương thức private để tránh lặp lại mã
    private function viewWithData($view, $title)
    {

        return view($view, ['title' => $title]);
    }
}
