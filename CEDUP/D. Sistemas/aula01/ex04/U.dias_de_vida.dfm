object frm_principal: Tfrm_principal
  Left = 0
  Top = 0
  Caption = 'Anos de vida'
  ClientHeight = 201
  ClientWidth = 193
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
  object lb_nome: TLabel
    Left = 32
    Top = 24
    Width = 69
    Height = 17
    Caption = 'Seu nome:'
  end
  object lb_anos: TLabel
    Left = 32
    Top = 88
    Width = 39
    Height = 17
    Caption = 'Anos:'
  end
  object txt_nome: TEdit
    Left = 32
    Top = 47
    Width = 121
    Height = 25
    TabOrder = 0
  end
  object txt_anos: TEdit
    Left = 32
    Top = 111
    Width = 121
    Height = 25
    TabOrder = 1
  end
  object btn_calcular: TButton
    Left = 32
    Top = 152
    Width = 75
    Height = 25
    Caption = 'Calcular'
    TabOrder = 2
    OnClick = btn_calcularClick
  end
end
