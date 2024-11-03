<?php

namespace App\Http\Controllers\Visitor;

use App\Http\Controllers\Controller;
use App\Models\CarDetails;
use App\Models\OfferDetails;
use App\Models\PhoneDetails;
use App\Models\Product;
use App\Models\ProductDetails;
use App\Models\RealEstateDetails;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Validator;

class AddProductController extends Controller
{
    public function add_product_info(Request $request)
    {
        try {
            $category_id = $request->category_id;
            return view('pages.visitor.pages.add-product.add-product-info', compact('category_id'));
        } catch (Exception $e) {
            return redirect('/');
        }
    }
    public function add_product_details(Request $request)
    {
        $category_id = $request->category_id;

        $validator = Validator::make($request->all(), [
            "type" => 'required|numeric',
            "transaction_type" => 'required|numeric',
            "city" => "required|string",
            "sector" => "required|numeric",
            "category_id" => "required|numeric",
        ]);
        if ($validator->fails()) {
            return redirect()->back()
                ->with('category_id', $category_id)
                ->withErrors($validator->errors());
        }

        if (!$category_id) return redirect('/');
        try {
            $shop_id = Auth::user() ? Auth::user()->shop[0]->id : null;
            $vendor_id = Auth::user() ? Auth::id() : null;

            $type = $request->type;
            $product = new Product();
            $product->category_id = $category_id;
            if ($shop_id) $product->shop_id = $shop_id;
            if ($vendor_id) $product->vendor_id = $vendor_id;
            $product->transaction_type = $request->transaction_type;
            $product->type = $type;
            $product->city = $request->city;
            $product->sector = $request->sector;
            $product->save();
            $product_id = $product->id;

            if ($type == "1") {
                return view('pages.visitor.pages.add-product.add-product-form2_1', compact('product_id'));
            } elseif ($type == "2") {
                return view('pages.visitor.pages.add-product.add-product-form2_2', compact('product_id'));
            } elseif ($type == "3") {
                return view('pages.visitor.pages.add-product.add-product-form2_3', compact('product_id'));
            } elseif ($type == "4") {
                return view('pages.visitor.pages.add-product.add-product-form2_4', compact('product_id'));
            } elseif ($type == "5") {
                return view('pages.visitor.pages.add-product.add-product-form2_5', compact('product_id'));
            } else {
                return redirect('/');
            }
        } catch (Exception $e) {
            return redirect('/');
        }
    }
    public function add_product_desc(Request $request)
    {
        $product_id = $request->id;
        try {
            $product = Product::find($request->id);
            if (!$product) return view('/');

            $type = $product->type;

            if ($type == "1") {
                $validator = Validator::make($request->all(), [
                    'id' => 'required|numeric',
                    "mark" => 'required',
                    "model" => 'required',
                ]);

                if ($validator->fails()) {
                    
                    return view('pages.visitor.pages.add-product.add-product-form2_1')
                        ->with('product_id', $product_id)
                        ->withErrors($validator->errors());
                }

                $product_details = new PhoneDetails();
                $product_details->mark = $request->mark;
                $product_details->model = $request->model;
                $product_details->ram = $request->ram;
                $product_details->storage = $request->storage;
                $product_details->screen_size = $request->screen_size;
                $product_details->battery = $request->battery;
                $product_details->product_status = $request->product_status;
                $product_details->back_camera = $request->back_camera;
                $product_details->front_camera = $request->front_camera;
                $product_details->fast_charge = $request->fast_charge;
                $product_details->exchange = $request->exchange;
                $product_details->delivery = $request->delivery;
                $product_details->save();
                $product->product_details_id = $product_details->id;
            } elseif ($type == "2") {

                $validator = Validator::make($request->all(), [
                    'id' => 'required|numeric',
                    "mark" => 'required',
                    "model" => 'required',
                ]);

                if ($validator->fails()) {
                    
                    return view('pages.visitor.pages.add-product.add-product-form2_2')
                        ->with('product_id', $product_id)
                        ->withErrors($validator->errors());
                }


                $added_tags  = $request->added_tags ? implode(',', $request->added_tags) : $request->added_tags;
                $product_details = new CarDetails();
                $product_details->mark = $request->mark;
                $product_details->model = $request->model;
                $product_details->fiscal_power = $request->fiscal_power;
                $product_details->gearbox = $request->gearbox;
                $product_details->doors_number = $request->doors_number;
                $product_details->first_hand = $request->first_hand;
                $product_details->fuel = $request->fuel;
                $product_details->meliage = $request->meliage;
                $product_details->origin = $request->origin;
                $product_details->product_status = $request->product_status;
                $product_details->exchange = $request->exchange;
                $product_details->added_tags = $added_tags;
                $product_details->save();
                $product->product_details_id = $product_details->id;
            } elseif ($type == "3") {
                $validator = Validator::make($request->all(), [
                    'id' => 'required|numeric',
                    "article_type" => 'required|numeric',
                ]);

                if ($validator->fails()) {
                    
                    return view('pages.visitor.pages.add-product.add-product-form2_3')
                        ->with('product_id', $product_id)
                        ->withErrors($validator->errors());
                }

                $added_tags  = $request->added_tags ? implode(',', $request->added_tags) : $request->added_tags;
                $product_details = new RealEstateDetails();
                $product_details->article_type = $request->article_type;
                $product_details->rooms = $request->rooms;
                $product_details->living_rooms = $request->living_rooms;
                $product_details->bathrooms = $request->bathrooms;
                $product_details->surface = $request->surface;
                $product_details->floor = $request->floor;
                $product_details->age = $request->age;
                $product_details->product_status = $request->product_status;
                $product_details->added_tags = $added_tags;
                $product_details->save();
                $product->product_details_id = $product_details->id;
            } elseif ($type == "4") {
                $validator = Validator::make($request->all(), [
                    'id' => 'required|numeric',
                    "sector" => 'required|numeric',
                ]);

                if ($validator->fails()) {
                    
                    return view('pages.visitor.pages.add-product.add-product-form2_4')
                        ->with('product_id', $product_id)
                        ->withErrors($validator->errors());
                }


                $product_details = new OfferDetails();
                $product_details->sector = $request->sector;
                $product_details->offer_lang = $request->offer_lang;
                $product_details->experience = $request->experience;
                $product_details->contract_type = $request->contract_type;
                $product_details->work_time = $request->work_time;
                $product_details->education_level = $request->education_level;
                $product_details->save();
                $product->product_details_id = $product_details->id;
            } elseif ($type == "5") {

                $validator = Validator::make($request->all(), [
                    'id' => 'required|numeric',
                    "product_status" => 'required|numeric',
                ]);

                if ($validator->fails()) {
                    
                    return view('pages.visitor.pages.add-product.add-product-form2_5')
                        ->with('product_id', $product_id)
                        ->withErrors($validator->errors());
                }

                $product_details = new ProductDetails();
                $product_details->product_status = $request->product_status;
                $product_details->exchange = $request->exchange;
                $product_details->delivery = $request->delivery;
                $product_details->save();
                $product->product_details_id = $product_details->id;
            } else {
                if ($product)  $product->delete();
                return redirect('/');
            }

            $product->update();

            return view('pages.visitor.pages.add-product.add-product-desc', compact('product_id'));
        } catch (Exception $e) {
            if ($product)  $product->delete();
            return redirect('/');
        }
    }
    public function add_product_images(Request $request)
    {
        $product_id = $request->id;
        try {
            $product = Product::find($request->id);
            if (!$product) return redirect('/');

            function clean_string($items)
            {
                $new_items = trim($items, "[{\"}]");
                $new_items = str_replace('value', "", $new_items);
                $new_items = str_replace('"', "", $new_items);
                $new_items = str_replace(':', "", $new_items);
                $new_items = str_replace('}', "", $new_items);
                $new_items = str_replace('{', "", $new_items);
                return $new_items;
            }

            $tags = clean_string($request->tags);

            $added_options = "";
            $i = 0;
            foreach ($request->added_option_value as $value) {
                $added_options .= $request->added_option_name[$i] . ':' . clean_string($value) . ';';
                $i++;
            }

            $product->title = $request->title;
            $product->price = $request->price;
            $product->content = $request->content;
            $product->tags = $tags;
            $product->faster_price = $request->faster_price;
            $product->added_options = $added_options;
            $product->update();


            return view('pages.visitor.pages.add-product.add-product-images', compact('product_id'));
        } catch (Exception $e) {
            if ($product) $product->delete();
            return redirect('/');
        }
    }
    public function add_product_auth(Request $request)
    {
        $product_id = $request->id;

        $validator = Validator::make($request->all(), [
            'id' => 'required|numeric',
            'images' => 'required',
            'images.*' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->with('product_id', $product_id)
                ->withErrors($validator->errors());
        }
        // try {
        $product = Product::find($request->id);
        // if (!$product) return redirect('/');

        $images = UploadImages($request->images, 'uploads/products');
        $product->images = $images;
        $product->update();

        if ($product->shop_id == null || Auth::check() == false) return view('pages.visitor.pages.add-product.add-product-auth', compact('product_id'));
        $next = true;
        return view('pages.visitor.pages.add-product.add-product-images', compact('product_id', 'next'));
        // } catch (Exception $e) {

        //     $error = false;
        //     return view('pages.visitor.pages.add-product.add-product-images', compact('error', 'product_id'));
        // }
    }
    public function add_product_status(Request $request)
    {
        $product_id = $request->id;

        $validator = Validator::make($request->all(), [
            'id' => 'required|numeric',
            'name' => 'required|string|max:255',
            'type' => 'required',
            'phone' => 'required|max:20|unique:users,phone|min:10',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|confirmed|min:8',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->with('product_id', $product_id)
                ->withErrors($validator->errors());
        }
        // try {
        $product = Product::find($request->id);
        if (!$product) return redirect('/');
        $next = true;
        $user = new  User();
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->user_type = $request->type;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        $this->guard()->login($user);
        $token = $user->createToken('auth_token')->plainTextToken;

        $display_phone_status = '0';
        if ($request->display_phone_status == 'on') $display_phone_status = '1';

        $product->display_phone_status = $display_phone_status;
        $product->vendor_id = $user->id;
        $product->update();

        return view('pages.visitor.pages.add-product.add-product-auth', compact('product_id', 'next'));
        // } catch (\Exception $ex) {

        //     $error = false;
        //     return view('pages.visitor.pages.add-product.add-product-auth', compact('error', 'product_id'));
        // }
    }
    public function close_modal(Request $request)
    {
        $product_id = $request->id;
        try {
            $product = Product::find($request->id);
            if (!$product) return redirect('/');

            $next = false;
            if ($request->from_auth) {
                return view('pages.visitor.pages.add-product.add-product-auth', compact('next', 'product_id'));
            } else {
                return view('pages.visitor.pages.add-product.add-product-images', compact('next', 'product_id'));
            }
        } catch (\Exception $ex) {

            $error = false;
            if ($request->from_auth) {
                return view('pages.visitor.pages.add-product.add-product-auth', compact('error', 'product_id'));
            } else {
                return view('pages.visitor.pages.add-product.add-product-images', compact('error', 'product_id'));
            }
        }
    }
    public function add_product_done(Request $request)
    {
        $product_id = $request->id;
        try {
            $product = Product::find($request->id);
            if (!$product) return redirect('/');
            $status = '1';
            if ($request->status == "draft") {
                $status = '0';
            } elseif ($request->status == "programmed") {
                $starts_at = $request->starts_at_date . ' ' .  $request->starts_at_time . ':00';
                $product->starts_at = $starts_at;
            }
            $product->status = $status;
            $product->update();
            return view('pages.visitor.pages.add-product.add-product-done');
        } catch (Exception $e) {
            $error = false;
            if ($request->from_auth) {
                return view('pages.visitor.pages.add-product.add-product-auth', compact('error', 'product_id'));
            } else {
                return view('pages.visitor.pages.add-product.add-product-images', compact('error', 'product_id'));
            }
        }
    }
}
