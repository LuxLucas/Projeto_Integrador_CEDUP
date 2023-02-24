program Hotpao;

uses
  Vcl.Forms,
  U_padaria in 'U_padaria.pas' {Form1};

{$R *.res}

begin
  Application.Initialize;
  Application.MainFormOnTaskbar := True;
  Application.CreateForm(TForm1, Form1);
  Application.Run;
end.
