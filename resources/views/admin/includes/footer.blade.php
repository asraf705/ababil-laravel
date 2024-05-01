<footer class="main-footer">
    <div class="footer-left">
        <!-- Copywrite Text -->
        <p class="copywrite">
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;
            {{ date('Y', strtotime($themeInfo->updated_at)) }}
            All rights <i class="fa fa-heart-o" aria-hidden="true"></i><a href="{{ route('home') }}">
                {{ $themeInfo->name }} </a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        </p>
    </div>
    <div class="footer-right">
    </div>
</footer>
