<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use App\Models\Member;
use App\Models\Borrowing;

class DashboardController extends Controller
{
    public function index()
    {
        $totalBooks = Book::count();
        $totalCategories = Category::count();
        $totalMembers = Member::count();
        $totalBorrowings = Borrowing::count();

        return view('dashboard.index', compact(
            'totalBooks',
            'totalCategories',
            'totalMembers',
            'totalBorrowings'
        ));
    }
}