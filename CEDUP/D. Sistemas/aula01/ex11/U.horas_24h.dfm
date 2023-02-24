object frm_principal: Tfrm_principal
  Left = 0
  Top = 0
  Caption = 'Horas_24h'
  ClientHeight = 201
  ClientWidth = 172
  Color = clBtnFace
  Font.Charset = ANSI_CHARSET
  Font.Color = clWindowText
  Font.Height = -15
  Font.Name = 'Times New Roman'
  Font.Style = [fsBold]
  OldCreateOrder = False
  Position = poDesktopCenter
  PixelsPerInch = 96
  TextHeight = 17
  object lb_hora: TLabel
    Left = 32
    Top = 24
    Width = 45
    Height = 17
    Caption = 'Horas:'
  end
  object lb_minutos: TLabel
    Left = 32
    Top = 88
    Width = 60
    Height = 17
    Caption = 'Minutos:'
  end
  object txt_horas: TEdit
    Left = 32
    Top = 47
    Width = 97
    Height = 25
    TabOrder = 0
  end
  object txt_minutos: TEdit
    Left = 32
    Top = 111
    Width = 97
    Height = 25
    TabOrder = 1
  end
  object btn_calcular: TButton
    Left = 32
    Top = 142
    Width = 75
    Height = 25
    Caption = 'Calcular'
    TabOrder = 2
    OnClick = btn_calcularClick
  end
end
