@echo off
title Titulo
if "%1" neq "" ( goto %1)
:Menu
cls
echo 1. Iniciar
echo 2. Creditos
echo 3. Sair
set /p resposta=Digite o número desejado e pressione Enter:
if %resposta%==1 goto Iniciar_1
if %resposta%==2 goto Creditos
if %resposta%==3 goto Sair
:Sair
cls
echo Obrigado por jogar!
pause
exit /b
:Creditos
cls
echo Creditos
echo.
echo Publicado pela Sena's Corporation
echo Idealizado por Angelo Sena
echo Feito na engine Notepad
echo Copyright Sena's Corporation
echo OBRIGADO POR JOGAR!!!
pause
goto Menu
:Iniciar_1
cls
set /p resposta=CMOS\
    if %resposta%==DIR (
        goto DIRCMOS
    if %resposta%==dir goto :DIRCMOS2

    ) else if %resposta%==GO CMOS goto :DIRCMOS2
pause
:DIRCMOS
echo CMOS       <DIR>
echo FILES      <DIR>
echo .NIT       <DIR>
echo README     <TXT>
echo SYSTEM     <DIR>
set /p resposta=CMOS\
    if %resposta%==GO CMOS (
        goto DIRCMOS2
    ) if %resposta%==GO FILES Files (
        goto DIRFILES
    ) if %resposta%==GO .NIT(
        goto DIRNIT
    ) if %resposta%==README(
        goto README
    )
pause
:DIRCMOS2
    echo teste
pause
