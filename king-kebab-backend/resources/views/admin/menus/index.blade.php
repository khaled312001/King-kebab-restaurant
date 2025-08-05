@extends('admin.layouts.app')

@section('title', 'إدارة القوائم')

@section('breadcrumb')
<li class="breadcrumb-item active">إدارة القوائم</li>
@endsection

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2>إدارة القوائم</h2>
    <div>
        <a href="{{ route('admin.menus.create') }}" class="btn btn-primary">
            <i class="fas fa-plus me-2"></i>إضافة عنصر جديد
        </a>
        <a href="{{ route('admin.menu.categories') }}" class="btn btn-outline-secondary">
            <i class="fas fa-tags me-2"></i>إدارة الفئات
        </a>
    </div>
</div>

<div class="card">
    <div class="card-header">
        <h5 class="mb-0">
            <i class="fas fa-utensils me-2"></i>
            عناصر القائمة
        </h5>
    </div>
    <div class="card-body">
        @if($menus->count() > 0)
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>الصورة</th>
                            <th>الاسم</th>
                            <th>الفئة</th>
                            <th>السعر</th>
                            <th>الحالة</th>
                            <th>تاريخ الإنشاء</th>
                            <th>الإجراءات</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($menus as $menu)
                        <tr>
                            <td>
                                @if($menu->image)
                                    <img src="{{ asset($menu->image) }}" alt="{{ $menu->name }}" 
                                         style="width: 50px; height: 50px; object-fit: cover; border-radius: 8px;">
                                @else
                                    <div class="bg-light d-flex align-items-center justify-content-center" 
                                         style="width: 50px; height: 50px; border-radius: 8px;">
                                        <i class="fas fa-image text-muted"></i>
                                    </div>
                                @endif
                            </td>
                            <td>
                                <strong>{{ $menu->name }}</strong>
                                @if($menu->description)
                                    <br><small class="text-muted">{{ Str::limit($menu->description, 50) }}</small>
                                @endif
                            </td>
                            <td>
                                @if($menu->category)
                                    <span class="badge bg-info">{{ $menu->category->name }}</span>
                                @else
                                    <span class="badge bg-secondary">بدون فئة</span>
                                @endif
                            </td>
                            <td>
                                <strong class="text-success">{{ number_format($menu->price, 2) }} ريال</strong>
                            </td>
                            <td>
                                @if($menu->is_available)
                                    <span class="badge bg-success">متاح</span>
                                @else
                                    <span class="badge bg-danger">غير متاح</span>
                                @endif
                            </td>
                            <td>
                                <small class="text-muted">{{ \Carbon\Carbon::parse($menu->created_at)->format('Y-m-d') }}</small>
                            </td>
                            <td>
                                <div class="btn-group" role="group">
                                    <a href="{{ route('admin.menus.show', $menu) }}" class="btn btn-sm btn-outline-primary">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="{{ route('admin.menus.edit', $menu) }}" class="btn btn-sm btn-outline-warning">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form method="POST" action="{{ route('admin.menus.destroy', $menu) }}" 
                                          class="d-inline" onsubmit="return confirm('هل أنت متأكد من حذف هذا العنصر؟')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-outline-danger">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            
            <div class="d-flex justify-content-center mt-4">
                {{ $menus->links() }}
            </div>
        @else
            <div class="text-center py-5">
                <i class="fas fa-utensils fa-3x text-muted mb-3"></i>
                <h5 class="text-muted">لا توجد عناصر في القائمة</h5>
                <p class="text-muted">ابدأ بإضافة عناصر جديدة للقائمة</p>
                <a href="{{ route('admin.menus.create') }}" class="btn btn-primary">
                    <i class="fas fa-plus me-2"></i>إضافة عنصر جديد
                </a>
            </div>
        @endif
    </div>
</div>
@endsection 