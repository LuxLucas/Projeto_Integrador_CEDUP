program Dias_passados;

uses
  Vcl.Forms,
  U.Dias_passados in 'U.Dias_passados.pas' {Form1};

{$R *.res}

begin
  Application.Initialize;
  Application.MainFormOnTaskbar := True;
  Application.CreateForm(TForm1, Form1);
  Application.Run;
end.
