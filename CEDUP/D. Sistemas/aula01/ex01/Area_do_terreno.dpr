program Area_do_terreno;

uses
  Vcl.Forms,
  U.Area_do_terreno in 'U.Area_do_terreno.pas' {frm_principal};

{$R *.res}

begin
  Application.Initialize;
  Application.MainFormOnTaskbar := True;
  Application.CreateForm(Tfrm_principal, frm_principal);
  Application.Run;
end.
