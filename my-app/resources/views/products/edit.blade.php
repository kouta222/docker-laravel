@extends('layouts.app')
 
 @section('content')
 <div class="container">
     <h1>商品情報更新</h1>
 
     <form action="{{ route('products.update',$product->id) }}" method="POST">
         @csrf
         @method('PUT')
         <div class="form-group">
             <label for="product-name">商品名</label>
             <input type="text" name="name" id="product-name" class="form-control" value="{{ $product->name }}">
         </div>
         <div class="form-group">
             <label for="product-description">商品説明</label>
             <textarea name="description" id="product-description" class="form-control">{{ $product->description }}</textarea>
         </div>
         <div class="form-group">
             <label for="product-price">価格</label>
             <input type="number" name="price" id="product-price" class="form-control" value="{{ $product->price }}">
         </div>
         <div class="form-group">
             <label for="product-category">カテゴリ</label>
             <select name="category_id" class="form-control" id="product-category">
                 @foreach ($categories as $category)
                 @if ($category->id == $product->category_id)
                 <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                 @else
                 <option value="{{ $category->id }}">{{ $category->name }}</option>
                 @endif
                 @endforeach 
                </select>
         </div>
             <strong>教授名</strong>
             <input type="text" name="name" value="{{ $product->teacher}}" placeholder="教授">
         </div>


         <div class="form-group">
             <label for="year">年度</label>
             <select name="year" class="form-control" id="year" value="{{ $product->year }}">
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
             <select name="semester" class="form-control" id="semester" value="{{ $product->semester}}">
                     <option value="spring">春学期</option>
                     <option value="2020">秋学期</option>
                     <option value="2021">通年</option>
                     <option value="2022">その他</option>
             </select>

             <div class="form-group">
             <label for="genre">ジャンル</label>
             <select name="genre" class="form-control" id="genre" value="{{ $product->genre}}">
                     <option value="note">ノート</option>
                     <option value="kakomon">過去問</option>
             </select>

         <button type="submit" class="btn btn-danger">更新</button>
     </form>
 
     <a href="{{ route('products.index') }}">商品一覧に戻る</a>
 </div>
 @endsection
