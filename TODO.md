# TODO

* implement all test cases.
* improve source code.(avoids copy and paste)
* error handling
* make continuous build box (linux and windows)
* re-consider function signatures. (I'd like to provide libuv same api)
* adjust config.m4 (currently, this ext supports osx and windows only. i'll fix this soon)

# Not tested

* UV_EXTERN int uv_process_kill(uv_process_t*, int signum);
* UV_EXTERN uv_err_t uv_set_process_title(const char* title);

# functions

* UV_EXTERN int uv_read2_start(uv_stream_t*, uv_alloc_cb alloc_cb,uv_read2_cb read_cb);
* UV_EXTERN int uv_write2(uv_write_t* req, uv_stream_t* handle, uv_buf_t bufs[],int bufcnt, uv_stream_t* send_handle, uv_write_cb cb);

* UV_EXTERN int uv_queue_work(uv_loop_t* loop, uv_work_t* req, uv_work_cb work_cb, uv_after_work_cb after_work_cb);
* UV_EXTERN char** uv_setup_args(int argc, char** argv);

* UV_EXTERN void uv_once(uv_once_t* guard, void (*callback)(void));
* UV_EXTERN int uv_thread_create(uv_thread_t *tid,void (*entry)(void *arg), void *arg);
* UV_EXTERN int uv_thread_join(uv_thread_t *tid);

# Not support

* UV_EXTERN uv_handle_type uv_guess_handle(uv_file file);

* UV_EXTERN uv_buf_t uv_buf_init(char* base, size_t len);
* UV_EXTERN size_t uv_strlcpy(char* dst, const char* src, size_t size);
* UV_EXTERN size_t uv_strlcat(char* dst, const char* src, size_t size);

* UV_EXTERN uv_err_t uv_dlopen(const char* filename, uv_lib_t* library);
* UV_EXTERN uv_err_t uv_dlclose(uv_lib_t library);
* UV_EXTERN uv_err_t uv_dlsym(uv_lib_t library, const char* name, void** ptr);
* UV_EXTERN const char *uv_dlerror(uv_lib_t library);
* UV_EXTERN void uv_dlerror_free(uv_lib_t library, const char *msg);
