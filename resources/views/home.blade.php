@extends('layouts.app')
@section('style')
    <style>
        .prod_attr{
            text-align: center;
            font-weight: 900;
            font-size: 20px;
        }

        hr{
            background-color: dimgrey;
            color: dimgrey;
            border: solid 1px dimgrey;
            height: 1px;
            width: 210px;
        }
        .price{
            padding-top: 5px;
        }

        #buttons{
            padding-top: 20px;
            padding-left: 8px;
        }
        button{
            width: 100px;
        }

        .cart_info{
            /*background-color: yellow;*/
            width: 550px;
            height: 500px;
            margin-left: 50%;
            margin-top: 80%;
        }
        td{
            width: 550px;
            text-align: center;
            padding: 15px 15px 15px 15px;
        }
        tr{
            border-bottom: 2px #9e9e9e solid;
        }
        tr:last-child{
            border-bottom: none;
        }
        td{
            border-right: 2px #9e9e9e solid;
            font-family: Verdana;
        }
        td:last-child{
            border-right: none;
        }

        #header{
            font-size: 22px;
        }

        .desc-side-content{
            background-color: #e0e0e0;
            height: 220px;
            width: 320px;
            float: right;
            padding: 15px 0px 0px 20px;
            font-size: 18px;
            font-family: Avenir;
        }
    </style>
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Items</div>
                    <div class="panel-body">
                        <div class="row">
                            @foreach ($products as $product)
                                <div class="col-md-3">
                                    <div class="well">
                                        <div class="prod_name" style="height: 80px;">
                                            <h4>{{ $product->description }}</h4>
                                        </div>
                                        <div>
                                            <img src="../{{ $product->name }}" width="215px" height="230px">
                                        </div>
                                        <div id="buttons">
                                            <a href="/cart/{{ $product->id }}"> <button class="btn btn-success"> Add to Cart</button> </a> <button class="btn btn-primary" data-toggle="modal" data-target="#details-modal-{{ $product->id }}"> View Details </button>
                                        </div>
                                        <hr>
                                        <div class="prod_attr">
                                            <div class="price">
                                                Price: &nbsp&nbsp&nbsp&nbsp
                                                ₱{{ $product->price }}
                                            </div>
                                            <div class="stock">
                                                Stock: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                                {{ $product->stock }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal -->
                                <div id="details-modal-{{ $product->id }}" class="modal fade" role="dialog">
                                  <div class="modal-dialog">

                                    <!-- Modal content-->
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title" style="margin-left: 30%; font-family: Avenir Next">{{ $product->description }}</h4>
                                      </div>
                                      <div class="modal-body">
                                        <img src="../{{ $product->name }}" width="215px" height="230px">
                                        <div class="desc-side-content">
                                            Product Cateogry ID:
                                            {{ $product->category_id }}<br>
                                            Product Price:
                                            {{ $product->price }}<br>
                                            Product Stock:
                                            {{ $product->stock }}<br>
                                            Product Barcode:
                                            {{ $product->barcode }}<br>
                                        </div>
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                      </div>
                                    </div>

                                  </div>
                                </div>
                                @endforeach
                                <!-- Modal -->
                                <div id="myModal" class="modal fade" role="dialog">
                                  <div class="modal-dialog">

                                    <!-- Modal content-->
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h1 class="modal-title" style="margin-left: 30%; font-family: Avenir Next">Simple Cart <span>&#128722;</span></h1>
                                      </div>
                                      <div class="modal-body">
                                        @if($cart_items == "[]") 
                                            <h3 style="text-align: center;">Your Cart is Empty at the moment :)</h3>
                                        @elseif($cart_items != "[]")
                                            <div class="row">
                                                <div class="col-md-12" style="overflow: auto; height: 450px;">
                                                    <table class="table-striped" border="0">
                                                        <thead>
                                                            <tr style="font-weight: 900; font-family: Verdana; padding-left: 20px">
                                                                <th>
                                                                    no.
                                                                </th>
                                                                <th>
                                                                    Items                                                       
                                                                </th>
                                                                <th>
                                                                    Quantity                                                       
                                                                </th>
                                                                <th>
                                                                    Price                                                       
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php 
                                                                $i = 1;
                                                            ?>
                                                            @foreach ($cart_items as $cart_item)
                                                            <tr>
                                                                <td>
                                                                    <?php
                                                                        echo $i;
                                                                    ?>
                                                                </td>
                                                                <td>
                                                                    <img src="../{{ $cart_item->name }}" width="80px" height="90px">
                                                                </td>
                                                                <td>
                                                                    {{ $cart_item->quantity }}
                                                                </td>
                                                                <td>
                                                                    {{ $cart_item->price }}
                                                                </td>
                                                            </tr>
                                                            <?php
                                                                $i++;
                                                            ?>
                                                             @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        @endif
                                      </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
