<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\BaseController as BaseController;
use Illuminate\Http\Request;
use App\Models\AboutTag;
use Storage;

class AboutTagController extends BaseController
{

    /**
     * About Tag listing
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public function index()
    {
        $aboutTagArr = AboutTag::orderBy('created_at', 'DESC')->get();

        $dataArr = [
            "page_title" => "About Tag",
            "aboutTagArr" => $aboutTagArr
        ];

        return view('pages.admin.about_tag.index')->with('dataArr', $dataArr);
    }

    /**
     * About Tag add page
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public function aboutTagAdd()
    {
        $dataArr = [
            "page_title" => "Add About Tag",
        ];

        return view('pages.admin.about_tag.add_about_tag')->with('dataArr', $dataArr);
    }

    /**
     * About Tag store
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public function aboutTagInsert(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg',
        ]);

        $img = $request->image;
        if ($img) {
            $uploadedFile = $img;
            $filename = time() . "." . $uploadedFile->getClientOriginalExtension();

            if (!Storage::makeDirectory('public/' . self::TAG_PIC_FOLDER)) {
                throw new \Exception('Could not create the directory');
            }

            Storage::disk('public')->putFileAs(
                self::TAG_PIC_FOLDER,
                $uploadedFile,
                $filename
            );

            AboutTag::create([
                'title' => $request->title,
                'image' => $filename
            ]);
        }

        return redirect()->route('admin.about.tag')->with([
            "message" => [
                "result" => "success",
                "msg" => "About Tag added successfully."
            ]
        ]);
    }

    /**
     * About Tag edit page
     * @param int $id
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public function aboutTagEdit($id)
    {
        $aboutTagArr = AboutTag::find($id);
        $dataArr = [
            "page_title" => "Edit About Tag",
            "aboutTagArr" => $aboutTagArr
        ];

        return view('pages.admin.about_tag.edit_about_tag')->with('dataArr', $dataArr);
    }

    /**
     * About Tag update
     * @param int $id
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public function aboutTagUpdate(Request $request, $id)
    {
        $aboutTagArr = AboutTag::find($id);

        $request->validate([
            'title' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg',
        ]);

        $img = $request->image;
        if ($img) {
            $uploadedFile = $img;
            $filename = time() . "." . $uploadedFile->getClientOriginalExtension();

            if (!Storage::makeDirectory('public/' . self::TAG_PIC_FOLDER)) {
                throw new \Exception('Could not create the directory');
            }
            if (!is_null($aboutTagArr->image)) {
                Storage::disk('public')->delete(self::TAG_PIC_FOLDER . '/' . $aboutTagArr->image);
            }

            Storage::disk('public')->putFileAs(
                self::TAG_PIC_FOLDER,
                $uploadedFile,
                $filename
            );

            $updateArray['image'] = $filename;
        }

        $updateArray['title'] = $request->title;
        AboutTag::find($id)->update($updateArray);

        return redirect()->route('admin.about.tag')->with([
            "message" => [
                "result" => "success",
                "msg" => "About Tag updated successfully."
            ]
        ]);
    }

    /**
     * About Tag remove
     * @param int $id
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public function aboutTagRemove($id)
    {
        $aboutTagArr = AboutTag::find($id);
        if (!is_null($aboutTagArr->image)) {
            Storage::disk('public')->delete(self::TAG_PIC_FOLDER . '/' . $aboutTagArr->image);
        }
        $aboutTagArr->delete();

        return redirect()->route('admin.about.tag')->with([
            "message" => [
                "result" => "success",
                "msg" => "About Tag deleted successfully."
            ]
        ]);
    }
}
