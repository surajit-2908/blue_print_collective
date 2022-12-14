<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\BaseController as BaseController;
use Illuminate\Http\Request;
use App\Models\Content;
use Storage;

class ContentController extends BaseController
{

    /**
     * Content listing options
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public function index()
    {

        $dataArr = [
            "page_title" => "Content",
        ];

        return view('pages.admin.content.index')->with('dataArr', $dataArr);
    }

    /**
     * Content listing
     * @param mixed $page
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public function content($page)
    {
        $contentArr = Content::where('page', $page)->get();

        $dataArr = [
            "page_title" => "Content",
            "contentArr" => $contentArr,
            "page" => $page
        ];

        return view('pages.admin.content.content_view')->with('dataArr', $dataArr);
    }

    /**
     * Testimonial edit page
     * @param int $id
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public function contentEdit($id)
    {
        $contentArr = Content::find($id);
        $dataArr = [
            "page_title" => "Edit Content",
            "contentArr" => $contentArr
        ];

        return view('pages.admin.content.edit_content')->with('dataArr', $dataArr);
    }

    /**
     * Testimonial update
     * @param int $id
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public function contentUpdate(Request $request, $id)
    {
        $contentArr = Content::find($id);

        $request->validate([
            'content' => 'required',
        ]);

        $updateArray['content'] = $request->content;

        $content = Content::find($id)->update($updateArray);

        return redirect()->route('admin.content.listing', $contentArr->page)->with([
            "message" => [
                "result" => "success",
                "msg" => "Content updated successfully."
            ]
        ]);
    }
}
