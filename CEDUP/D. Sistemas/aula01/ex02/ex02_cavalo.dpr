program ex02_cavalo;

uses
  Vcl.Forms,
  U.cavalo in 'U.cavalo.pas' {Form1};

{$R *.res}

begin
  Application.Initialize;
  Application.MainFormOnTaskbar := True;
  Application.CreateForm(TForm1, Form1);
  Application.Run;
end.
