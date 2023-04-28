@extends('layouts.app')
 
 @section('content')
 <div class="container">
     <h1>新しい商品を追加</h1>
     <form action="{{ route('products.store') }}" method="POST"  enctype="multipart/form-data">
          @csrf
           <div class="item-image-form image-picker">
                <input type="file" name="image" class="d-none" accept="image/png,image/jpeg,image/gif" id="item-image" />
                     <label for="item-image" class="d-inline-block" role="button">
                          <img src="{{asset('/img/dummy_img.png') }}" style="object-fit: cover; width: 300px; height: 200px;">
                      </label>
         </div>
                    @error('item-image')
                        <div style="color: #E4342E;" role="alert">
                            <strong>{{ $message }}</strong>
                        </div>
                    @enderror
    
         <div class="form-group">
             <label for="product-name">商品名</label>
             <input type="text" name="name" id="product-name" class="form-control" placeholder="哲学概論など略さずに記入してください。">
         </div>

         <div class="form-group">
             <label for="product-description" >商品説明</label>
             <textarea name="description" id="product-description" class="form-control" placeholde="例）全１２回講義のノートです。"></textarea>
         </div>
         <div class="form-group">
             <label for="product-price" >価格</label>
             <input type="number" name="price" id="product-price" class="form-control" placeholder="目安は３００～７００円です。">
         </div>
         <div class="form-group">
             <label for="product-category">学部</label>
             <select name="category_id" class="form-control" id="product-category">
                 @foreach ($categories as $category)
                     <option value="{{ $category->id }}">{{ $category->name }}</option>
                 @endforeach
             </select>
         </div>
         
         <div class="form-group">
             <label for="teacher">教授名</label>
             <input type="text" name="teacher" id="teacher-name" class="form-control">
         </div>


         <div class="form-group">
             <label for="year">年度</label>
             <select name="year" class="form-control" id="year">
                     <option value="2019">2019年度</option>
                     <option value="2020">2020年度</option>
                     <option value="2021">2021年度</option>
                     <option value="2022">2022年度</option>
                     <option value="2023">2023年度</option>
                     <option value="2024">2024年度</option>                
                     <option value="2025">2025年度</option>
              </select>

             <div class="form-group">
             <label for="semester">学期</label>
             <select name="semester" class="form-control" id="semester">
                     <option value="spring">春学期</option>
                     <option value="2020">秋学期</option>
                     <option value="2021">通年</option>
                     <option value="2022">その他</option>
             </select>

             <div class="form-group">
             <label for="genre">ジャンル</label>
             <select name="genre" class="form-control" id="genre">
                     <option value="note">ノート</option>
                     <option value="kakomon">過去問</option>
             </select>










         <button type="submit" class="btn btn-success">商品を登録</button>
     </form>
 
     <a href="{{ route('products.index') }}">商品一覧に戻る</a>
 </div>
 @endsection