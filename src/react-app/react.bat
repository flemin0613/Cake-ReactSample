
IF EXIST "..\..\webroot\react-app" (
    rmdir /s /q "..\..\webroot\react-app"
)

xcopy /s /e /y /i build ..\..\webroot\react-app