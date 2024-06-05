<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index()
    {
        $posts = Post::paginate(20);
        return view('job.index', [
            'title' => 'Jobs',
            'active' => 'jobs',
            'posts' => $posts
        ]);
    }

    public function show($id)
    {
        $post = Post::find($id);
        $posts = Post::paginate(6);
        return view('job.show', [
            'title' => 'Show',
            'active' => 'jobs',
            'post' => $post,
            'posts' => $posts
        ]);
    }

    public function apply(Post $post)
    {
        // Pesan yang akan dikirim melalui WhatsApp
        $message = "Halo, saya tertarik dengan posisi " . $post->title . ". Saya ingin melamar pekerjaan ini. Terima kasih.";
        $whatsappNumber = $post->company->whatsapp_number;
        $whatsappLink = "https://api.whatsapp.com/send?phone=" . $whatsappNumber . "&text=" . urlencode($message);
        
        // Redirect pengguna ke tautan WhatsApp
        return redirect()->away($whatsappLink);
    }
}
